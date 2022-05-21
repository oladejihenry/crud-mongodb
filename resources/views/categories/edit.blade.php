<form action="{{ route('updateCategory', $category->id) }}" method="POST">
  @csrf
  <input type="text" name="name" value="{{ $category->name }}">
  <br><br>
  <input type="submit" value="Submit">
</form>