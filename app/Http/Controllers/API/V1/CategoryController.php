<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json('Test');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
        return response()->json('New Category Created!');
        11:59
    }

    public function show($id)
    {

    }

    public function update($id, UpdateCategory $request)
    {

    }

    public function destroy($id)
    {

    }
}
