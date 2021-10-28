<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {

        $categories = [];
        if ($request->filled('category')) {

            $names = $request->get('category');
            foreach ($names as $name) {
                $categories[] = Category::with('images')->where('name', $name)->first();
            }

            $category = Category::all();
            return view('admin.gallery.list', compact('category', 'categories'));
        }

        $images = Gallery::all();
        $category = Category::all();
        return view('admin.gallery.list', compact('images', 'category', 'categories'));

    }

    public function create()
    {
        $category = Category::all();
        return view('admin.gallery.create', compact('category'));

    }

    public function store(Request $request)
    {

        if ($request->ajax()) {
            $request->validate([
                'file' => 'required|mimes:jpg,jpeg,png,gif|max:10000'
            ]);

            if ($request->hasFile('file'))
            {

                $file = $request->file('file');
                $fileName = time() . '.' . $file->extension();
                $folder = '/uploads/images/';
                $filePath = $folder . $fileName;
                $file->move(public_path($folder), $fileName);
                return $filePath;
            }
        }

        $request->validate([
            'documents' => 'required',
            'category' => 'required'
        ]);


        $paths = explode(',', $request->documents);
        $pathIds = [];

        foreach ($paths as $path) {
            $gallery = Gallery::create([
                'image' => $path
            ]);
            $pathIds[] = $gallery->id;
        }


        foreach ($request->category as $item) {
            $category = Category::where('name', $item)->first();
            if (!$category) {
                $category = Category::create([
                    'name' => $item
                ]);
            }
            $category->images()->attach($pathIds);
        }

        return redirect()->route('admin.galleries.index');

    }


    public function destroy(Request $request, $gallery)
    {
        $gallery = Gallery::find($request->id);
        if ($gallery) {
            $gallery->categories()->detach();
            $gallery->delete();

        }

        return response()->json([
            'success' => true,
        ]);

    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if ($category) {
            $category->images()->detach();
            $category->delete();
        }

        return response()->json([
            'success' => true,
        ]);

    }

    public function categoryUpdate(Request $request)
    {
        Category::where('id', $request->id)
            ->update([
                'name' => $request->name
            ]);

        return response()->json([
            'success' => true,
        ]);
    }

    public function categoryAdd(Request $request)
    {
        Category::create([
                'name' => $request->name
            ]);

        return response()->json([
            'success' => true,
        ]);
    }
}
