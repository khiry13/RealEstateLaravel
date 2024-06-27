<?php

namespace App\Http\Controllers;

use App\Models\Buyproperty;
use Illuminate\Http\Request;

class BuypropertyController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $buy = new Buyproperty;


        $buy->property_id = $request->property_id;
        $buy->name = $request->name;
        $buy->email = $request->email;
        $buy->phone = $request->phone;
        $buy->message = $request->message;

        $buy->save();

        return redirect()->back()->with('status', 'Your message sent successfully...!');
    }

    public function showmessages($id)
    {
        $messages = Buyproperty::where('property_id', $id)->get();

        return view('admin.property.showmessages', compact('messages'));
    }

    public function destroy($id)
    {
        $message = Buyproperty::findOrFail($id);

        $message->delete();

        return redirect()->back();
    }
}