<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupStudentController extends Controller
{
    public function store(Request $request){

        $validator = $request->validate([
            'group_id' => 'required|integer|exists:groups,id',
            'student_id' => 'required|integer|exists:users,id',
        ]);

        $group = Group::query()->findOrFail($validator['group_id']);

        $group->students()->attach($validator['student_id']);

        return response()->json(['message'=>'Student added to group']);
    }

    public function update()
    {
        $validator = request()->validate([
            'group_id' => 'required|integer|exists:groups,id',
            'student_id' => 'required|integer|exists:users,id',
        ]);
        $group = Group::query()->findOrFail($validator['group_id']);
        $group->students()->sync($validator['student_id']);
        return response()->json(['message'=>'Student updated to group']);
    }

    public function destroy(string $id, Request $request){
        $validator = $request->validate([
            'group_id' => 'required|integer|exists:groups,id',
        ]);
        $group = Group::query()->findOrFail($validator['group_id']);
        $group->students()->detach($id);

        return response()->json(['message'=>'Student deleted to group']);
    }
}
