<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteGroupSubjectRequest;
use App\Http\Requests\StoreGroupSubjectRequest;
use App\Http\Requests\UpdateGroupSubjectRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupSubjectController extends Controller
{

    public function store(StoreGroupSubjectRequest $request)
    {
        $validator = $request->validated();



        $group = Group::query()->findOrFail($validator['group_id']);

        $group->subject()->attach($validator['subject_id']);

        return response()->json(['message' => 'Group attached'], 200);
    }
    public function update(string $id, UpdateGroupSubjectRequest $request){

        $validator = $request->validated();
        $group = Group::query()->findOrFail($id);
        $group->subject()->detach($validator['subject_id']);
        return response()->json(['message' => 'Group updated'], 200);
    }

    public function destroy(string $id, DeleteGroupSubjectRequest $request){

        $validator = $request->validated();

        $group = Group::query()->findOrFail($validator['group_id']);
        $group->subject()->detach($id);
        return response()->json(['message' => 'Group detached'], 200);
    }







}
