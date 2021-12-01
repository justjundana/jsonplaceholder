<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Utils\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    use Response;
    private $userService;

    /**
     * Constructor of the controller.
     * 
     * @param \App\Services\UserService $userService
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $user = $this->userService->registerService($request);

        if (!empty($user)) {
            return $this->responseData($user);
        }

        return $this->responseError('Failed to Register User!', 500);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) == true) {
            $user = $this->userService->loginService($request);

            return new JsonResponse([
                'success' => true,
                'token' => $user,
            ], 200);
        }

        return $this->responseError('Your Email or Password Incorrect!', 401);
    }

    public function index()
    {
        $users = $this->userService->getAllUserService();

        if (!empty($users)) {
            foreach ($users as $user) {
                $data[] = [
                    'id' => $user->id,
                    'avatar' => $user->avatar,
                    'name' => $user->name,
                    'email' => $user->email,
                    'address' => [
                        'street' => $user->street,
                        'city' => $user->city,
                        'country' => $user->country,
                        'postcode' => $user->postcode,
                    ],
                    'phone' => $user->phonenumber
                ];
            }
            return $this->responseDataCount($data);
        }

        return $this->responseDataNotFound('Data Not Found!');
    }

    public function show($id)
    {
        $user = $this->userService->getUserByIdService($id);

        if (!empty($user)) {
            $data = [
                'id' => $user['id'],
                'avatar' => $user['avatar'],
                'name' => $user['name'],
                'email' => $user['email'],
                'address' => [
                    'street' => $user['street'],
                    'city' => $user['city'],
                    'country' => $user['country'],
                    'postcode' => $user['postcode']
                ],
                'phone' => $user['phonenumber']
            ];
            return $this->responseData($data);
        }

        return $this->responseDataNotFound('Data Not Found!');
    }
}
