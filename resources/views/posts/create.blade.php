<form action="{{ route('store') }}" method="POST">
  @csrf
  <select name="category_id">
    <option value="">Select Category</option>
    @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  <br><br>
  <input type="text" name="title" value="">
  <br><br>
  <input type="text" name="body" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>