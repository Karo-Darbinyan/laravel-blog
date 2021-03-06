<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post[]|Collection|Response
     */
    public function index()
    {

        $categories = Category::withCount('posts')->get(); //$categories = Category::all()->loadCount('posts');
        $slider_posts = Post::orderBy('id', 'desc')->limit(2)->get();
        $latest_posts = Post::orderBy('id', 'desc')->limit(2)->get();
        $posts_1 = Post::with(['user', 'category'])->limit(4)->get();

        return [
            'slider_posts' => $slider_posts,
            'latest_posts' => $latest_posts,
            'categories' => $categories,
            'posts_1' => $posts_1
        ];
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        echo "<pre>";
        print_r(4564564);
        echo "</pre>";
        die;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Post|Post[]|Collection|Model|Response
     */
    public function post()
    {
        echo "<pre>";
        print_r(654);
        echo "</pre>";
        die;
        return Post::find($id);
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Post|Post[]|Collection|Model|Response
     */
    public function show(int $id)
    {
        echo "<pre>";
        print_r($id);
        echo "</pre>";
        die;
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
