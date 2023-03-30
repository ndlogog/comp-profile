<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\V1\StaticPageResource;
use App\Http\Resources\V1\StaticPageCollection;
use App\Http\Requests\StoreStaticPageRequest;
use App\Http\Requests\UpdateStaticPageRequest;
use App\Models\StaticPage;

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

    public function show(StaticPage $staticPage)
    {
        return new StaticPageResource($staticPage);
    }

    public function update(UpdateStaticPageRequest $request, StaticPage $staticPage)
    {
        $staticPage->update($request->all());
        return response()->json('Static Page Updated!');
    }
    
    public function destroy(StaticPage $staticPage)
    {
        $staticPage->delete();
        return response()->json('Category Deleted!');
    }
}
