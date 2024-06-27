<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyImageController extends Controller
{
    public function index(int $propertyId)
    {
        $propertyImages = PropertyImage::where('property_id', $propertyId)->get();
        $property = Property::findOrFail($propertyId);
        return view('admin.propertyImage.index', compact('property', 'propertyImages'));
    }

    public function store(Request $request, int $propertyId)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $property = Property::findOrFail($propertyId);
        $imageData = [];
        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = $key . '-' . time() . '.' . $extension;

                $path = 'uploads/properties/';

                $file->move($path, $filename);

                $imageData[] = [
                    'property_id' => $property->id,
                    'image' => $path . $filename,
                ];
            }
        }

        $property->photo = $filename;
        PropertyImage::insert($imageData);

        return redirect()->back()->with('status', 'Uploaded Successfully');
    }

    public function destroy(int $propertyImageId)
    {
        $propertyImage = PropertyImage::findOrFail($propertyImageId);
        if (File::exists($propertyImage->image)) {
            File::delete($propertyImage->image);
        }

        $propertyImage->delete();

        return redirect()->back()->with('status', 'ImageDeleted');
    }
}
