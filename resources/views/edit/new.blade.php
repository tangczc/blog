@extends('layouts.default')
@section('title')

@section('content')

<form action = "#" method = "post">
    {{ csrf_field() }}
    <div class = "mks">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">标题</span>
            <input type="text" class="form-control" name = "title" placeholder="标题" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">类别</span>
            <input type="text" class="form-control" name = "type" placeholder="类别" aria-describedby="basic-addon1">
        </div>
        <div id="test-editormd" class="mk">
            <textarea name="test-editormd" style="display:none;"></textarea>
        </div>

        @include('markdown::encode',['editors'=>['test-editormd']])
        <div class="btn-group tj" role="group">
            <button type="submit" class="btn btn-success">创建</button>
        </div>
    </div>
</form>
@stop
