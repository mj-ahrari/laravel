<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ['ali', 'mohammad'];
        return view('myview', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorArticleRequest $request)
    {
        dd($request);
        // if($request->email === "ahrari.eh@gmail.com"){
        //     session(['isAdmin'=>'Are']);
        //     return redirect()->route('admin')->with('admin','yes');
        // }else{
        //     return redirect()->back();
        // }
        // $article = new Article();
        // $article->title = "This is a test article";
        // $article->user_id = 2;
        // $article->save();
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email',
        //     'username' => 'required|min:5'
        // ],[
        //     'email.required' => 'پر کردن فیلد email الزامی است',
        //     'email.email' => 'فرمت ایمیل صحیح نمی باشد.',
        //     'username.min' => 'فیلد username می بایست از 5 کاراکتر بیشتر باشد.'
        // ]);
        // $validator = Validator::make($request->all(), [
        //         'email' => 'required|email',
        //         'username' => 'required|min:5'
        //     ]);
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator);
        // }
        // $request->validate([
        //     'username' => 'required|min:5',
        //     'email' => 'email|required'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($id);
        // dd($user);
        // print_r($user);
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
