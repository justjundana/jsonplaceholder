<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use App\Utils\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiGalleryController extends Controller
{
    use Response;
    private $galleryService;

    /**
     * Constructor of the controller.
     * 
     * @param \App\Services\GalleryService $galleryService
     * @return void
     */
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function index()
    {
        $galleries = $this->galleryService->getAllGalleryService();

        if (!empty($galleries)) {
            return $this->responseDataCount($galleries);
        }

        return $this->responseDataNotFound('Data Not Found!');
    }

    public function show($id)
    {
        $gallery = $this->galleryService->getGalleryByIdService($id);

        if (!empty($gallery)) {
            return $this->responseData($gallery);
        }

        return $this->responseDataNotFound('Data Not Found!');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $gallery = $this->galleryService->storeGalleryService($request);

        if (!empty($gallery)) {
            return $this->responseData($gallery);
        }

        return $this->responseDataNotFound('Failed to Add Data!');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $gallery = $this->galleryService->getGalleryByIdService($id);

        if (!empty($gallery)) {
            if ($gallery['user_id'] == Auth::user()->id) {
                $data = $this->galleryService->updateGalleryService($request, $id);

                return $this->responseData($data);
            }

            return $this->responseError("You don't Have Permission to Update This Data!");
        }

        return $this->responseDataNotFound('Failed to Update Data!');
    }

    public function destroy($id)
    {
        $gallery = $this->galleryService->getGalleryByIdService($id);

        if (!empty($gallery)) {
            if ($gallery['user_id'] == Auth::user()->id) {
                $this->galleryService->deleteGalleryService($id);

                return $this->responseData('Data Deleted Successfully!');
            }

            return $this->responseError("You don't Have Permission to Delete This Data!");
        }

        return $this->responseDataNotFound('Failed to Delete Data!');
    }
}
