<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    // public function fetchAndStore(){
    //     // $posts = [ ['title' => 'عنوان تجريبي 1', 'body' => 'محتوى تجريبي أول'], ['title' => 'عنوان تجريبي 2', 'body' => 'محتوى تجريبي ثانٍ'] ]; foreach ($posts as $post) { Post::create([ 'title' => $post['title'], 'body' => $post['body'], ]);
    //     // $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    //     // $posts = $response->json();
    //     // foreach ($posts as $post) {
    //     // Post::create([
    //     //     'title' => $post['title'],
    //     //     'body' => $post['body'],
    //     // ]);
    //     // $response = Http::withOptions(['port' => 443])->get('https://jsonplaceholder.typicode.com/posts');
    //     // $posts = $response->json();
    //     // ​foreach ($posts as $post) {
    //     //     Post::create([
    //     //     'title' => $post['title'],
    //     //     'body' => $post['body'],
    //     //     ]
    // }
    public function create()
{
    return view('posts.create');
}

    public function edit($id)
{
    $post = Post::findOrFail($id);

    if ($post->user_id !== auth()->id()) {
        abort(403,'It is not necessary for you to edit this post');
    }

    return view('posts.edit', compact('post'));
}
    public function destroy($id)
{
    $post = Post::findOrFail($id);

    if ($post->user_id !== auth()->id()) {
        abort(403, 'It is not necessary for you to delete this post');
    }

    $post->delete();

    return redirect()->route('dashboard')->with('success','The post has been successfully deleted');
}

public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    $request->validate([
        'title' => 'required|string|max:255',
        'body'  => 'required|string',
    ]);

    $post->update([
        'title' => $request->title,
        'body'  => $request->body,
    ]);

    return redirect()->route('dashboard')->with('success', 'The post has been updated successfully');
}
    public function index()
{
    $posts = \App\Models\Post::latest()->get();
    return view('dashboard', compact('posts'));
}
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
    ]);
    \App\Models\Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'user_id' => auth()->id(),
        ]);

    // dd($requestall);


    return redirect('/dashboard')->with('success', 'Post saved successfully!');
}

}
