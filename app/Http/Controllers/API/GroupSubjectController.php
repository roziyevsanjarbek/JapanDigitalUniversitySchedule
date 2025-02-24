<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupSubjectController extends Controller
{

    public function store(Request $request)
    {
        $validator = $request->validate([
            'group_id' => 'required|exists:groups,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);


        $group = Group::findOrFail($validator['group_id']);

        $group->subject()->attach($validator['subject_id']);

        return response()->json(['message' => 'Group attached'], 200);
    }
    public function update(string $id, Request $request){

        $validator = $request->validate([
            'subject_id' => 'required|exists:subjects,id',
        ]);
        $group = Group::query()->findOrFail($id);
        $group->subject()->detach($validator['subject_id']);
        return response()->json(['message' => 'Group updated'], 200);
    }

    public function destroy(string $id, Request $request){

        $validator = $request->validate([
            'group_id' => 'required|exists:groups,id',
        ]);

        $group = Group::query()->findOrFail($validator['group_id']);
        $group->subject()->detach($id);
        return response()->json(['message' => 'Group detached'], 200);
    }







}
