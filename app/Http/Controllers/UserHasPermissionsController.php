<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class UserHasPermissionsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $users = User::query()->paginate();

        return JsonResource::collection($users);
    }

    public function show(User $user): JsonResource
    {
        return JsonResource::make($user);
    }
}
