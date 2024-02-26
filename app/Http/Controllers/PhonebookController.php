<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;
class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Phonebook::all();
        return view('phonebook.content',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $phonebook = new Phonebook;
        $phonebook->first_name = $request->first_name;
        $phonebook->last_name = $request->last_name;
        $phonebook->phone_number = $request->phone_number;
        $phonebook->email = $request->email;
        $phonebook->city = $request->city;
        $phonebook->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $phonebook = Phonebook::find($request->id);
        return view('phonebook.edit', compact('phonebook'));
    }
    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Phonebook $phonebook)
    {
        $phonebook = Phonebook::find($request->id);

        $phonebook->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $phonebook = Phonebook::find($request->id);
        $phonebook->delete();
        return redirect()->back();
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(phonebook $phonebook)
    {
        //
    }
}
