<?php

namespace App\Http\Controllers\Post;

use App\{Category,Post};
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('posts')->get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {


        //$file = $request->file('video');
        //$video = $file->store('learn/video');

        $request["name_video"] = ucwords($request["name_video"]);
        $request['description'] = ucfirst($request['description']);

        Post::create([
            'name_video' => $request["name_video"],
            'order' => $request['order'],
            'category_id' => $request['category'],
            //'slug' => Str::slug($request['name_video']),
            'description' => $request['description'],
            'video' => $request['video'],
            'start' => $request['start'],
            'end' => $request['end'],
            //'video' => $video
        ]);

        return back()->with('success',"Post has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $category = Category::with('posts')->where('id',$post->category_id)->first();
        return view('post.show',compact('category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $categories = Category::with('posts')->get();
        $result=Post::find($post);
        return view('post.edit', ['post'=>$result], compact('categories'));
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
        $validasi = $request->validate([
            'name_video' => "required|string|max:25",
            'category_id' => "required",
            "order" => "required|integer",
            "start" => "required|integer",
            "end" => "required|integer",
            "description" => 'required|max:255|string',
            "video" => "required|string|max:50",
        ]);

        Post::where('id', $post->id)->update($validasi);
        $request->session()->flash('pesan',"Data berhasil diperbaharui");
        return redirect()->route("post.show", ['post'=>$post->id]);
        //compact('posts')
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

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('category.show', ['category'=>$category->id])
        ->with('pesan',"Data berhasil dihapus");
    }

}
