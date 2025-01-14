<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;  // Add this line to import the Category model
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Bagian ini tetap seperti yang Anda isi
        return view('back.category.index', [
            'categories' => Category::get()
        ]);
    }


    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Kosong
    }

   


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Kosong
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Kosong
    }
}
