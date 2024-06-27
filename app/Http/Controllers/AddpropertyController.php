<?php

namespace App\Http\Controllers;

use App\Models\Addproperty;
use Illuminate\Http\Request;

class AddpropertyController extends Controller
{
    public function create()
    {
        return view('user.addproperty');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $info = new Addproperty;

        $info->name = $request->name;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->address = $request->address;
        $info->description = $request->description;
        $info->price = $request->price;

        $image = $request->image;
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $path = 'uploads/properties/';
        $request->image->move($path, $image_name);

        $info->image = $image_name;

        $info->save();

        return redirect()->back()->with('message', 'تم إرسال تفاصيل العقار بنجاح وسيتم التواصل معك قريبا');
    }

    public function show()
    {
        $properties = Addproperty::all();

        return view('admin.moreproperties', compact('properties'));
    }

    public function destroy($id)
    {
        $property = Addproperty::findOrFail($id);

        $property->delete();

        return redirect()->back();
    }
}