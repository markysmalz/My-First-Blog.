<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('blog.index', compact('post'));
    }
    public function create()
    {
        return view('blog.create');
    }
    public function show ($id)
    {
       $post = Post::findorFail($id);

        return view('blog.show', compact('post'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
         'published_at' => 'required'
        ]);
       $input = $request->all();
         Post::create($input);
        Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();
    }
    public function edit($id)
    {
        $post = Post::findorFail($id);
        return view('blog.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::findorFail($id);
        $this->validate($request,[
           'title' => 'required',
            'content' => 'required',
            'published_at' => 'required'
        ]);

        $input = $request->all();
        $post->fill($input)->save();
       Session::flash('flash_message', 'Post successfully added!');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('flash_message', 'Post successfully deleted!');

        //return redirect()->route('/');
    }
}
