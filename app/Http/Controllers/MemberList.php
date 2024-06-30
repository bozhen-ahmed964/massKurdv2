<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Trainer;
use Illuminate\Http\Request;

class MemberList extends Controller
{
    public function index()
    {
        $members = Member::with('trainer')->latest()->paginate(12);
        $trainers = Trainer::all();
        return view('memberList', [
            'members' => $members,
            'trainers' => $trainers,

        ]);
    }

    public function insterMember(Request $request)
    {
        $rule = $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'weight' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'exercise_type' => 'required|string|in:cardio,bodybuilding,fitness',
            'start_date' => 'required|string|max:255',
            'expire_date' => 'required|string|max:255',
            // add trainer
            'trainer_id' => 'required|numeric|exists:trainers,id',
        ]);



        Member::create($rule);
        return redirect()->back();
    }




    public function deleteMember(Request $request, Member $member)
    {

        $member->delete();
        return redirect()->route('memberPage');
    }
}
