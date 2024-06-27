<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Propertytype;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $propertytypes = Propertytype::all();
        $properties = Property::all();
        return view('user.index', compact('properties', 'propertytypes'));
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $properties = Property::all();
            return view('admin.property.index', compact('properties'));
        } else {
            $properties = Property::all();
            return view('user.index', compact('properties'));
        }
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        $propertyImages = PropertyImage::where('property_id', $id)->get();
        return view('user.property-detail', compact('property', 'propertyImages'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function agents()
    {
        return view('user.agents');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function searchProperty(Request $request)
    {

        $searchtext = $request->searchtext;
        $type = $request->type;

        if ($searchtext) {

            $properties = Property::where('propertytype_id', $type)->orWhere('name', 'LIKE', "%$searchtext%")->orWhere('description', 'LIKE', "%$searchtext%")->get();
        } else {

            $properties = Property::where('propertytype_id', $type)->get();
        }

        $propertytypes = Propertytype::all();

        return view('user.index', compact('properties', 'propertytypes'));
    }
}
