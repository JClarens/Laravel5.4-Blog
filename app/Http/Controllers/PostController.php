<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; #bikinsendiri
use Session; #bikinsendiri
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the blog posts int it from the database
        //$postsIndex= Post::all(); paginate untuk batasi yg muncuk itu 10 per halaman. id desc untuk mengurutkan berdasarkan post terbaru
        $postsIndex= Post::orderBy('id','desc')->paginate(10);
        //return a view and pass int the above  variable 
        return view('posts.index')->withPostszzz($postsIndex);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //1 set view location go to rout *1
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data *2
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required'
        ));

        //store in the database 83
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save(); 
        
        #return $post;
        #$request->session()->flash('success','The Blog Post was Successfully Save!');
        Session::flash('Ssuccess','The Blog Post was Successfully Save!');
        //redirect to another page *4
        return redirect()->route('posts.show', $post->id);
        //return redirect('/posts/' . $post->id);

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
        $post = Post::find($id); //BASIC ELOQUENT *5 
        return view ('posts.show')->withPost($post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a va
        $post = Post::find($id);
        //return the view and pass in the var previously created
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required'
        ));


        // save the data to te database
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save(); 
        
        // set flash data with success message
        Session::flash('Success','The Blog Post was Successfully Update!');
        // redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
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
        $post = Post::find($id);

        $post->delete();

        Session::flash('Success','The Blog Post was Successfully Delete!');
        return redirect()->route('posts.index');
    }
}
