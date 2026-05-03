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

    // حماية: التأكد إن اللي بيعدل هو صاحب البوست
    if ($post->user_id !== auth()->id()) {
        abort(403, 'غير مسموح لك بتعديل هذا المنشور');
    }

    return view('posts.edit', compact('post'));
}
    public function destroy($id)
{
    // 1. بندور على البوست اللي عايزين نمسحه
    $post = Post::findOrFail($id);

    // 2. حماية: نضمن إن اللي بيمسح هو صاحب البوست فعلاً
    if ($post->user_id !== auth()->id()) {
        abort(403, 'غير مسموح لك بحذف هذا المنشور');
    }

    // 3. تنفيذ الحذف من الداتابيز
    $post->delete();

    // 4. نرجعه لصفحة الداشبورد مع رسالة تأكيد
    return redirect()->route('dashboard')->with('success', 'تم حذف المنشور بنجاح');
}
     // تأكد إن السطر ده موجود فوق خالص في أول الملف

public function update(Request $request, $id)
{
    // 1. بندور على البوست
    $post = Post::findOrFail($id);

    // 2. حماية: نضمن إن اللي بيعدل هو صاحب البوست فعلاً
    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    // 3. التأكد من البيانات (Validation)
    $request->validate([
        'title' => 'required|string|max:255',
        'body'  => 'required|string',
    ]);

    // 4. تحديث البيانات في الداتابيز
    $post->update([
        'title' => $request->title,
        'body'  => $request->body,
    ]);

    // 5. نرجعه لصفحة البروفايل أو الداشبورد مع رسالة نجاح
    return redirect()->route('dashboard')->with('success', 'تم تحديث المنشور بنجاح');
}
    public function index()
{
    // جلب كل البوستات مرتبة من الأحدث للأقدم
    $posts = \App\Models\Post::latest()->get();
    return view('dashboard', compact('posts'));
}
    public function store(Request $request)
{
    // 1. التأكد من البيانات
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

    // 3. التحويل لصفحة كل البوستات مع رسالة نجاح
    return redirect('/dashboard')->with('success', 'Post saved successfully!');
}

}
