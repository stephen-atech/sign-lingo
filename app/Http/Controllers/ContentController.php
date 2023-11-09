<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        //
        if(auth()->user()->isAdmin){
            return view('admin.content',compact('category'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $content = new Content();
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                // Move the uploaded image to the public/images/project folder
                $image->storeAs('public/images/content/', $imageName);

                // Save the image URL to the database
                $content->image_url =  $imageName;
            }
            $content->name = $request->name;
            $content->description = $request->description;
            $content->category_id = $request->category;
            $content->save();

            DB::commit();
            return redirect()->back()->with('success', 'New content created!!');
        } catch (\Exception $e) {
            if (isset($imageName)) {
                Storage::delete('public/images/content/' . $imageName);
            }
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, content $content)
    {
        //
        try {
            DB::beginTransaction();

            if ($request->hasFile('image')) {
                // Delete the old image
                if ($content->image_url) {
                    Storage::delete('public/images/content/' . $content->image_url);
                }

                // Upload the new image
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/images/store/', $imageName);
                $content->image_url =  $imageName;
            }
            $content->name = $request->name;
            $content->save();

            DB::commit();
            
        } catch (\Exception $e) {
            if (isset($imageName)) {
                Storage::delete('public/images/content/' . $imageName);
            }
            DB::rollBack();

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(content $content)
    {
        //
    }
}