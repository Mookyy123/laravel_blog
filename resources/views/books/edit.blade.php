<h1>Edit Book</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $book->title }}">
    <input type="text" name="author" value="{{ $book->author }}">
    <input type="number" name="pages" value="{{ $book->pages }}">
    <input type="text" name="user_id" value="{{ $book->user_id }}">
    <input type="text" name="category_id" value="{{ $book->category_id }}">
    <button type="submit">Update</button>
</form>

<a href="/books">Back to List</a>
