<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberList extends Controller
{
    public function index()
    {
        $members = Member::paginate(9);
        return view('memberList', [
            'members' => $members,
        ]);
    }
}