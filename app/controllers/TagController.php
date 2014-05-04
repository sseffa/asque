<?php

class TagController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function all() {

        $tags = Tag::paginate(20);
        return View::make('tag.all', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($slug) {

        /*
        $posts = Post::with(array('tags' => function ($query) use ($slug) {
            $query->where('slug', $slug);
        }))->paginate(10)->toArray();
        */

        $tag = Tag::where('slug', '=', $slug)->first();
        $posts = $tag->posts()->paginate(10);

        return View::make('tag.index', compact('posts'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
}
