<form  method="post" action="{{route('post.login')}}">
    @csrf
    <div class="form-group">
        <input type="text" name="name" placeholder="მომხმარებლის სახელი" class="form-control">
        <input type="password" name="password" class="form-control" placeholder="პაროლი">
        <button type="submit">შესვლა</button>
    </div>

</form>
