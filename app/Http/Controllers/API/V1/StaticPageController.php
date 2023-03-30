<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPage;
use App\Http\Resources\V1\StaticPageResource;
use App\Http\Resources\V1\StaticPageCollection;
use App\Http\Requests\StoreStaticPageRequest;
use App\Http\Requests\UpdateStaticPageRequest;

class StaticPageController extends Controller
{
    public function index()
    {
        return new StaticPageCollection(StaticPage::paginate(10));
    }

    public function store(StoreStaticPageRequest $request)
    {
        StaticPage::create($request->all());
        return response()->json('New Static Page Created!');
    }

    public function show(StaticPage $sp)
    {
        return new StaticResource($sp);
    }

    public function update(UpdateStaticPageRequest $request, StaticPage $sp)
    {
        $sp->update($request->all());
        return response()->json('Static Page Updated!');
    }
    
    public function destroy(StaticPage $sp)
    {
        $sp->delete();
        return response()->json('Category Updated!');
    }
}
