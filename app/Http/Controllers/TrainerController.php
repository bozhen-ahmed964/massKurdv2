<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;


class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::withCount('members')->latest()->get();
        return view('trainer', ['trainers' => $trainers,]);
    }

    public function insertTrainer(Request $request)
    {

        $rule = $request->validate([
            'full_name' => 'required|string|max:255|unique:trainers,full_name',
            'age' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255|unique:trainers,phone_number',
            'gender' => 'required|string|in:male,female',
            'salery' =>  'required|string|max:255',
        ]);


        Trainer::create($rule);
        return redirect()->back();
    }
}
