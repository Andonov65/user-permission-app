<?php

namespace App\Http\Controllers;

use App\Models\PermissionsForUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Validation\ValidationException;

class PermissionsForUserController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $permissions = PermissionsForUser::query()->paginate();

        return JsonResource::collection($permissions);
    }

    public function show($user): JsonResource
    {
        $permissionsForUser = User::query()->find($user)->permissions->pluck('permission_name');

        return JsonResource::make(collect($permissionsForUser));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): JsonResource
    {
        $validate = $this->validate($request, [
            'user_id' => 'required',
            'permissions_for_user_id' => 'required'
        ]);

        $user = User::query()->findOrFail($validate['user_id'])
            ->permissions()->attach($validate['permissions_for_user_id']);

        return JsonResource::make($user);
    }
}
