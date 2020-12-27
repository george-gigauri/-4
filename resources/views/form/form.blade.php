@extends('../layout.layout')
@section('content')
    <style>
        input {
            border: 2px solid red;
            margin: 20px;
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
    </style>

    <h1 class="title">
        პოსტის შექმნა
    </h1>

    <form action="{{route('posts.save')}}" method="POST" enctype="multipart/form-data" >
        <div class="container">
            <div>
                <label for="exampleInputEmail1">სათაური</label>
                <input type="name" class="form-control" name="title" required>
            </div>

            <div>
                <label for="exampleInputEmail1">აღწერა</label>
                <input type="name" class="form-control" name="body" required>
            </div>
            <div>
                <label for="exampleInputEmail1">მოწონებები</label>
                <input type="name" class="form-control" name="post_likes" required>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit">შენახვა</button>
        </div>
    </form>


@endsection()
