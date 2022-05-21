<form action="{{ route('storeCategory') }}" method="POST">
  @csrf
  <input type="text" name="name" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>