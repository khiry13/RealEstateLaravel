<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Propertytype;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allTypes = Propertytype::all();
        return view('admin.property.create', compact('allTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);
        $property = new Property;

        $property->name = $request->name;
        $property->description = $request->description;
        $property->status = $request->status;
        $property->price = $request->price;
        $property->propertytype_id = $request->type;

        $property->save();

        return redirect()->back()->with('status', 'Property added successfully...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allTypes = Propertytype::all();
        $property = Property::findOrFail($id);
        return view('admin.property.edit', compact('property', 'allTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);

        $property->name = $request->name;
        $property->description = $request->description;
        $property->status = $request->status;
        $property->price = $request->price;
        $property->propertytype_id = $request->type;

        $property->save();

        return redirect()->back()->with('status', 'Property updated successfully...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        $property->delete();

        return redirect()->back();
    }

    public function addPropertyType()
    {
        $allTypes = Propertytype::all();
        return view('admin.PropertyType.index', compact('allTypes'));
    }

    public function storePropertyType(Request $request)
    {

        $propertyType = new Propertytype;

        $propertyType->description = $request->description;
        $propertyType->AdminId = 1;

        $propertyType->save();

        return redirect()->back();
    }

    public function deletePropertyType($id)
    {
        $type = Propertytype::find($id);

        $type->delete();

        return redirect()->back();
    }
}