@extends('layouts.default')
@section('title')

@section('content')
    <div class="article_info">
        <table>
            @foreach($articles as $article)
                <tr>
                    <td>
                      <a href="{{ route('articles.show',$article -> id)}}">
                       <h1> {{ $article -> title}}</h1>
                       <hr/>
                       <p>点击查看全文.....
                       </p>
                       <span>•&nbsp;{{ $article -> type }}</span>
                      </a>
                        
                    </td>
                </tr>
              
            @endforeach
        </table>
    </div>
    <div class="page">
        {{ $articles->links() }}
    </div>
@stop