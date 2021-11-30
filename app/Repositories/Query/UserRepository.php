<?php

namespace App\Repositories\Query;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function register(Request $request)
    {
        $register = new User();
        $register->name = $request->name;
        $register->avatar = "https://ui-avatars.com/api/?name=$request->name";
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->street = $request->street;
        $register->city = $request->city;
        $register->country = $request->country;
        $register->postcode = $request->postcode;
        $register->phonenumber = $request->phone;
        $register->save();

        return $register;
    }

    public function login(Request $request)
    {
        $user = $this->model->where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('token')->plainTextToken;
        return $token;
    }

    public function index()
    {
        return $this->model->paginate();
    }

    public function show($id)
    {
        return $this->model->whereId($id)->first();
    }
}
