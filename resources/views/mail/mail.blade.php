@extends('layout.layout')
@section('content')
    <style>
        input {
            border: 2px solid #2200ff;
            margin: 5px;
            border-radius: 10px;
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
            color: red;
            font-family: monospace;
        }
        button{
            width: 100px;height: 34px;font-size: 18px;border-radius: 10px; border: 2px solid #2200ff;
        }
    </style>

    <h1 class="title">
        ელ. ფოსტის შექმნა
    </h1>


    <form action="{{route('mail.send')}}" method="post" enctype="multipart/form-data" >
        <div class="container">
            <div style="height: 70px;">
                <label for="exampleInputEmail1">ფოსტა</label>
                <input type="email" class="form-control @error('mail') is-invalid @enderror" name="mail">
                @error('mail')
                <p class="error-container">{{$errors->first('mail')}}</p>
                @enderror
            </div>
        </div>
        @csrf
        <div class="box-footer">
            <button type="submit">გაგზავნა</button>
        </div>
    </form>


@endsection()
