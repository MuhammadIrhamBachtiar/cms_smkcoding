<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('front.category.index', [
            'articles' => Article::with('category')->whereHas('category', function($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->paginate(9),
            'category' => $slugCategory
        ]);
    }
}

