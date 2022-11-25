<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $post=post::paginate(8);
        return view('post', ['posts' => $post]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('createPost',['categories'=> $category]);

    }
    public function post()
    {
        return view('post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->postimg->extension();
        $request->postimg->move(public_path('images'), $imageName);
        $save = new Post;
        $save->title = $request->title;
        $save->postimg = $imageName;
        $save->description=$request->description;
        $save->categoryId=$request->categoryId;
        $save->save();
        $posts=Post::paginate(8);
        return view('post', ['posts' => $posts]);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('editpost', ['posts' => $post]);
    }




   public function editCategory()
   {
       $category=Category::all();
       return view('editpost', ['categories' => $category]);

   }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @param $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = Post::find($id);
        if($request->hasFile('postimg')){
            $request->validate([
                'postimg' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);
            $imageName = time().'.'.$request->postimg->extension();
            $request->postimg->move(public_path('images'), $imageName);
            $post->postimg = $imageName;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
