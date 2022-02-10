<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\CategoryService;
use App\Http\Controllers\Services\ContentService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public $link = 'categories';

    public function index()
    {
        $categories = CategoryService::getAllCategories()->toArray();
        return array_reverse($categories);
    }

    public function create(Request $request)
    {
        $rules = CategoryService::rules();
        $category = new Category();
        return ContentService::create($request, $rules, $this->link, $category);
    }

    public function edit($id) {
        $category = CategoryService::getOneCategory($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $element = CategoryService::getOneCategory($id);
        $rules = CategoryService::rules();
        return ContentService::update($request, $rules, $this->link, $element);
    }

    public function delete($id)
    {
        return CategoryService::delete($id, $this->link);
    }
}
