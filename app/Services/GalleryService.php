<?php

namespace App\Services;

use App\Repositories\GalleryRepositoryInterface;
use Illuminate\Http\Request;

class GalleryService
{
	private $galleryRepository;

	public function __construct(GalleryRepositoryInterface $galleryRepository)
	{
		$this->galleryRepository = $galleryRepository;
	}

	public function getAllGalleryService()
	{
		return $this->galleryRepository->index();
	}

	public function getGalleryByIdService($id)
	{
		return $this->galleryRepository->show($id);
	}

	public function storeGalleryService(Request $request)
	{
		return $this->galleryRepository->store($request);
	}

	public function updateGalleryService(Request $request, $id)
	{
		return $this->galleryRepository->update($request, $id);
	}

	public function deleteGalleryService($id)
	{
		return $this->galleryRepository->delete($id);
	}
}
