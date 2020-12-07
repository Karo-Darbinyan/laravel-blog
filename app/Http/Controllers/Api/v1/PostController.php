<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        echo "<pre>";
        print_r('index');
        echo "</pre>";
        die;
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
        echo "<pre>";
        print_r('create');
        echo "</pre>";
        die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request);
        echo "</pre>";
        die;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return Post|Post[]|Builder|Builder[]|Collection|Model|\Illuminate\Database\Query\Builder|object
     */
    public function show(string $slug)
    {
        $post = Post::whereSlug($slug)->with('user')->first();

        if ($post) {
            $post->update(['views' => ++$post->views]);
        }

        return [
            'post' => $post
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        echo "<pre>";
        print_r(52465);
        echo "</pre>";
        die;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        echo "<pre>";
        print_r(52465);
        echo "</pre>";
        die;
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
