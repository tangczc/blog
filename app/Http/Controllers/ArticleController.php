<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *  首页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('article')->orderBy('updated_at','desc')->paginate(4);
        return view('layouts.index',['articles' => $articles]);
    }

    /**
     * Store a newly created resource in storage.
     *添加blog
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request -> input('title');
        $type = $request -> input('type');
        $test_editormd = $request -> input('test-editormd');
        DB::insert("insert into article (title,type,test_editormd) values (?,?,?)",[$title,$type,$test_editormd]);
        return redirect() -> route('articles.index');

    }

    /**
     * Display the specified resource.
     * 展示blog
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::select("select * from article where id = ?",[$id]);
        foreach($article as $a){
            $title = $a -> title;
            $text = $a -> test_editormd;
            $time = $a -> created_at;
        }

        return view('layouts.show',compact('title','text','time'));
    }
    /**
     * 显示查询blog的结果
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find($type){
        $articles = DB::table('article') -> where('type',$type)->orderBy('updated_at','desc')->paginate(4);
        
        return view('layouts.find',['articles'=>$articles]);
    }
}
