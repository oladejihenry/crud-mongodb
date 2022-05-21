<form action="{{ route('store') }}" method="POST">
  @csrf
  <input type="hidden" name="category_id" value="{{ $category->id }}">
  <br><br>
  <input type="text" name="title" value="">
  <br><br>
  <input type="text" name="body" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>

<br><br>

<a href="/posts">Go Back</a>