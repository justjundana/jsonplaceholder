<?php

namespace App\Repositories\Query;

use App\Models\Gallery;
use App\Repositories\GalleryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GalleryRepository implements GalleryRepositoryInterface
{
    protected $model;

    public function __construct(Gallery $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->paginate(50);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store(Request $request)
    {
        $imageName = time() . Str::random(20) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/images'), $imageName);

        $newImage = new Gallery();
        $newImage->user_id = Auth::user()->id;
        $newImage->title = $request->title;
        $newImage->image = $imageName;
        $newImage->save();

        return $newImage;
    }

    public function update(Request $request, $id)
    {
        $gallery = $this->model->findOrFail($id);

        if ($request->image != null) {
            $path = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $gallery->image;

            if (File::exists($path)) {
                File::delete($path);
            }
        };

        $imageName = time() . Str::random(20) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('/images'), $imageName);

        $gallery->update([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return $gallery;
    }

    public function delete($id)
    {
        $gallery = $this->model->findOrFail($id);

        $path = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $gallery->image;

        if (File::exists($path)) {
            File::delete($path);
        }

        return $gallery->delete();
    }
}
