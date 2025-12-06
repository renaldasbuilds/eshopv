<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with(['products'])
                    ->orderBy('id','asc')
                    ->get();
        return view('admin.categories.index', compact('categories'));
    }
    public function create() {
        return view('admin.categories.create');
    }
    public function destroy($id) {
        $category = Category::findOrFail($id);
        // patikrinti ar egzistuoja nuotrauka, jei taip - pasalinti
        $category->delete();
        return redirect()
            ->route('admin.category.index')
            ->with('success','Kategorija sėkmingai ištrinta');
    }
}    
