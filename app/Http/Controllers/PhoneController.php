<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneStore;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
      
        return view('phones.create',compact('user'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhoneStore $request)
    {
        $phone = new Phone(
            ["phone"=>"+".$request['areacode']. $request['phone'],
            "user_id"=>$request['user_id'],]);
        $phone->save();
        return redirect()->route('home')->with(['success' => 'Telefono creado']);

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
