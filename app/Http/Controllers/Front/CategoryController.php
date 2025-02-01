<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        $category = Category::where('slug', $slugCategory)->first();

        if (!$category) {
            abort(404); // Jika kategori tidak ditemukan, tampilkan error 404
        }

        return view('front.category.index', [
            'articles' => Article::with('Category')->whereHas('Category', function($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->paginate(9),
            'category' => $category, // Kirim objek kategori, bukan string
        ]);
    }
}
