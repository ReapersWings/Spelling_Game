<form action="{{ route('f_insert') }}" method="post">
    @csrf
    <label for="">Nickname:</label>
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>