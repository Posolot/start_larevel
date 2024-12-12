<?php

namespace App\Http\Controllers;

use App\Models\Birthday;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\BirthdaysResource;

class BirthdayController extends Controller
{
    public function index(){
    $birthdays = Birthday::with('user')->get();

    $groupedBirthdays = $birthdays->groupBy(function ($birthday) {
        return \Carbon\Carbon::parse($birthday->date_of_birth)->month;
    });

    return view('birthdays.index', compact('groupedBirthdays'));
    }

    public function create()
    {
        $users = User::all();

        return view('birthdays.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date_of_birth' => 'required|date',
            'description' => 'nullable|string|max:255',
        ]);

        $birthday = Birthday::create($validated);

        return redirect()->route('birthdays.index')->with('status', 'День рождения добавлен!');
    }

    public function edit(Birthday $birthday)
    {
        $users = User::all();

        return view('birthdays.edit', compact('birthday', 'users'));
    }

    public function update(Request $request, Birthday $birthday)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date_of_birth' => 'required|date',
            'description' => 'nullable|string|max:255',
        ]);

        $birthday->update($validated);

        return redirect()->route('birthdays.index')->with('status', 'День рождения обновлен!');
    }

    public function destroy(Birthday $birthday)
    {
        $birthday->delete();

        return redirect()->route('birthdays.index')->with('status', 'День рождения удален!');
    }
}

