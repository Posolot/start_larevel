<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'submitted_at' => now(),
        ];
        $filename = 'data_' . uniqid() . '.json';
        Storage::disk('local')->put('data/' . $filename, json_encode($data));

        return redirect()->route('form.show')->with('status', 'Data saved successfully!');
    }

    public function showData()
    {
        $files = Storage::disk('local')->files('data');
        $allData = [];

        foreach ($files as $file) {
            $allData[] = json_decode(Storage::disk('local')->get($file), true);
        }

        return view('data', ['allData' => $allData]);
    }
}

