<h1>{{ $post->title }}</h1>

<br>
<p>{{ $post->body }}</p>


Category: <em>{{ $post->category->name }}</em>
<br><br>

<a href="/posts">Go Back</a>