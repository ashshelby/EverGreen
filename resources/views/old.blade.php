<html lang="html">
<head><title>Dashboard | EverGreen. </title></head>
<body style="background-color: darkolivegreen;">
<div >
	@if(session()->has('message'))
		<div>{{ session()->get('message') }}</div>
	@endif
    <h1 style="color:lightgreen;">EverGreen.</h1>
    <div>
        <a style="color:white;" href="/create"> Create a Post</a>
    </div>
        @foreach($posts as $post)
            <div style="background-color: white; vertical-align: center; margin-left: 30%;margin-right: 50%;border-radius: 1.2em; padding: 1em; margin: 1em 1em 1em 1em;">
                <h3 style="color:black;">{{ $post->title }}</h3>
                <h5>Posted By <a href="{{"/@".$post->user->username}}">{{$post->user->username}}</a></h5>
                <a href="/post/{{$post->id}}">More Here</a>
            </div>
        @endforeach

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">LOGOUT</button>
    </form>

</div>
</body>
</html>
