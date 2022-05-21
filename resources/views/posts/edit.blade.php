<form action="{{ route('update', $post->id) }}" method="POST">
  @csrf
  <input type="text" name="title" value="{{ $post->title }}">
  <br><br>
  <input type="text" name="body" value="{{ $post->body }}">
  <br><br>
  <input type="submit" value="Submit">
</form>

<br><br>

<a href="/posts">Go Back</a>