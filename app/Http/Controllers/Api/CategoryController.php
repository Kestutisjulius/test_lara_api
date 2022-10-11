<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return CategoryResource::collection($categories);
    }

    public function show(Category $category){

        return new CategoryResource($category);

    }

    public function store(StoreCategoryRequest $request){

        $category = Category::create($request->all());

        return new CategoryResource($category);
    }
}
