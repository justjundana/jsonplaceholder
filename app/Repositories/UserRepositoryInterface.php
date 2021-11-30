<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    /**
     * Register User.
     * 
     * @return array
     */
    public function register(Request $request);

    /**
     * Login User.
     * 
     * @return array
     */
    public function login(Request $request);

    /**
     * Show All User.
     * 
     * @return array
     */
    public function index();

    /**
     * Show User by ID.
     * 
     * @return array
     */
    public function show($id);
}
