<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface GalleryRepositoryInterface
{
    /**
     * Get All Gallery.
     * 
     * @return array
     */
    public function index();

    /**
     * Show Gallery by ID.
     * 
     * @return array
     */
    public function show($id);

    /**
     * Store Gallery.
     * 
     * @return array
     */
    public function store(Request $request);

    /**
     * Update Gallery.
     * 
     * @return array
     */
    public function update(Request $request, $id);

    /**
     * Delete Gallery.
     * 
     * @return array
     */
    public function delete($id);
}
