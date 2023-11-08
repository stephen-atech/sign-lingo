<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Level $level)
    {
        //
        if (auth()->user()->isAdmin) {
            $categories = $level->categories;
            return view('admin.categories', compact('categories','level'));
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
            
            $category = new Category();
            $category->level_id = $request->levelId;
            $category->name = $request->CategoryName;
            $category->save();

            DB::commit();
            return redirect()->back()->with('success', 'New category created!!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }


    public function showAll(Level $level)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}