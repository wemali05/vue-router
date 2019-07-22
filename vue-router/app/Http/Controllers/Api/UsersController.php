<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UsersController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(10));
    }
    public function show(User $user)
    {
    return new UserResource($user);
    }

    public function update(User $user, Request $request)
    {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user->update($data);

    return new UserResource($user);
    }

    public function destroy(){
        $user->delete();

        return response(null, 204);
    }
}