<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::paginate(10));
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->all());
        return response()->json('New Post Created!');
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());
        return response()->json('Post Updated!');
    }
    
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Post Deleted!');
    }
}
