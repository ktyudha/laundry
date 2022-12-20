<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image',
        ]);

        $newName = '';

        if ($request->file('image_url')) {
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = Str::words($request->name, 2) . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/post', $newName);
        }

        Post::create([
            'name' => $request->name,
            'image_url' => $request['image_url'] = $newName,
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
        return redirect()->route('post.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image|max:1024',
        ]);

        $newName = '';

        $values = [
            'name' => $request->name,
        ];
        if ($request->file('image_url')) {
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = Str::words($request->name, 2) . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/post', $newName);

            $values['image_url'] = $newName;
        }

        $post->update($values);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
