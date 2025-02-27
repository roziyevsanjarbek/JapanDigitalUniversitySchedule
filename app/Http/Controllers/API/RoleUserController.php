<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleUserRequest;
use App\Http\Requests\UpdateRoleUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleUserRequest $request)
    {
        $validator = $request->validated();

        $user = User::query()->find($validator['user_id']);
        $user->roles()->attach($validator['role_id']);

        return response()->json(['message' => 'User role added successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleUserRequest $request)
    {
        $validator = $request->validated();
        $user = User::query()->find($validator['user_id']);

        $user->roles()->sync($validator['role_id']);
        return response()->json(['message' => 'User role updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, UpdateRoleUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::query()->findOrFail($id);
        $user->roles()->detach($validated['role_id']);
        return response()->json(['message' => 'User role deleted successfully.']);
    }
}
