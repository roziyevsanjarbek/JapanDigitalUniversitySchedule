<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteGroupStudentRequest;
use App\Http\Requests\StoreGroupStudentRequest;
use App\Http\Requests\UpdateGroupStudentRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupStudentController extends Controller
{
    public function store(StoreGroupStudentRequest $request){

        $validator = $request->validated();

        $group = Group::query()->findOrFail($validator['group_id']);

        $group->students()->attach($validator['student_id']);

        return response()->json(['message'=>'Student added to group']);
    }

    public function update(UpdateGroupStudentRequest $request)
    {
        $validator = $request->validated();
        $group = Group::query()->findOrFail($validator['group_id']);
        $group->students()->sync($validator['student_id']);
        return response()->json(['message'=>'Student updated to group']);
    }

    public function destroy(string $id, DeleteGroupStudentRequest $request){
        $validator = $request->validated();
        $group = Group::query()->findOrFail($validator['group_id']);
        $group->students()->detach($id);

        return response()->json(['message'=>'Student deleted to group']);
    }
}
