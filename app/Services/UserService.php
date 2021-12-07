<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserService
{
	private $userRepository;

	public function __construct(UserRepositoryInterface $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function registerService(Request $request)
	{
		return $this->userRepository->register($request);
	}

	public function loginService(Request $request)
	{
		return $this->userRepository->login($request);
	}

	public function getAllUserService()
	{
		return $this->userRepository->index();
	}

	public function getUserByIdService($id)
	{
		return $this->userRepository->show($id);
	}

	public function getUserByEmailService($email)
	{
		return $this->userRepository->email($email);
	}
}
