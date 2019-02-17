@extends('layouts.default')
@section('title')

@section('content')

@include('editor::head')
<form action = "{{ route('articles.store')}}" method = "post">
{{ csrf_field()}}
    <div class = "mks">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">标题</span>
            <input type="text" class="form-control" name = "title" placeholder="标题" aria-describedby="basic-addon1" required="required" >
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">类别</span>
            <input type="text" class="form-control" name = "type" placeholder="类别" aria-describedby="basic-addon1" required="required" >
        </div>
        <div class="editor mk">
            <textarea id='myEditor' name = "test-editormd"></textarea>
        </div>
        <div class="btn-group tj" role="group">
            <button type="submit" class="btn btn-success">创建</button>
        </div>
    </div>
</form>
@stop
