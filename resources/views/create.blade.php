@extends('layout.layout')
@section('content')
    <style>
        input {
            background-color: #e0e0e0;
            margin: 5px;
            padding: 5px;
            border-radius: 18px;
            border-style: none;
        }
        .container{
            margin-left: 50px;
        }
        .title{
            margin-left: 50px;
        }
        .box-footer{
            margin-left: 50px;
        }
        .error-container{
            margin-block-start: 0;
            font-size: 15px;
            color: rgb(255, 0, 128);
            font-family: monospace;
        }
        button{
            width: 100px;
            height: 34px;
            font-size: 18px;
            border-radius: 18px;
            border-style: none;
             background-color: #00ffdd;
             color: #ffffff;
        }
    </style>

    <h1 class="title">
        შექმნა
    </h1>


{{--@if($errors->any())--}}

{{--    @foreach($errors->all() as $error)--}}
{{--        <li>{{$error}}</li>--}}
{{--    @endforeach--}}
{{--@endif--}}
<form action="{{route('posts.save')}}" method="post" enctype="multipart/form-data" >
    <div class="container">
        <div style="height: 70px;">
            <input type="name" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="სათაური">
            @error('title')
            <p class="error-container">{{$errors->first('title')}}</p>
            @enderror
        </div>

        <div style="height: 70px;">
            <input type="name" class="form-control @error('text') is-invalid @enderror" name="body" placeholder="ძირითადი ტექსტი">
            @error('text')
            <p class="error-container">{{$errors->first('text')}}</p>
            @enderror
        </div>
        <div style="height: 70px;">
            <input type="name" class="form-control @error('likes') is-invalid @enderror" name="post_likes" placeholder="მოწონებები">
            @error('likes')
            <p class="error-container">{{$errors->first('likes')}}</p>
            @enderror
        </div>

        <div style="height: 70px;">
            <label for="exampleInputEmail1">თეგები</label>
            <select name="tags[]" id="" multiple>
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @csrf
    <div class="box-footer">
        <button type="submit">შენახვა
</button>
    </div>
</form>


@endsection()
