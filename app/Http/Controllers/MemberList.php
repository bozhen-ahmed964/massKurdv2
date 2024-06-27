<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberList extends Controller
{
    public function index()
    {
        $members = Member::with('trainer')->paginate(12);

        return view('memberList', [
            'members' => $members,
        ]);

    }


    public function deleteMember(Request $request, Member $member)
    {
        $member->delete();
        return redirect()->route('memberPage');
    }


}
