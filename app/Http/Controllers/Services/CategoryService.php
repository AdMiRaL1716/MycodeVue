<?php

namespace App\Http\Controllers\Services;

use App\Models\Category;

class CategoryService
{
    public static function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'filter' => ['required', 'string', 'max:255'],
        ];
    }

    public static function insert($category, $data)
    {
        $category->name = $data['name'];
        $category->filter = $data['filter'];
    }

    public static function getAllCategories()
    {
        return Category::all();
    }

    public static function getOneCategory($id)
    {
        return Category::find($id);
    }

    public static function delete($id, $link)
    {
        $category = self::getOneCategory($id);
        try {
            $category->delete();
            return redirect('categories')->with('success',"Operation successfully");
        }
        catch(Exception $e){
            return redirect('categories')->with('failed',"Operation failed");
        }
    }
}
