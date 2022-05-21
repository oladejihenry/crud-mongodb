<form action="{{ route('store') }}" method="POST">
  @csrf
  <input type="text" name="title" value="">
  <br><br>
  <input type="text" name="body" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>