<h1>Books List</h1>

{{-- @dd($books) --}} {{-- Commented out so page renders --}}

@foreach($books as $book)
    <p>{{ $book->title }} - {{ $book->author }} - {{ $book->pages }} pages</p>
    <a href="/books/{{ $book->id }}/edit">Edit</a>
    <form action="/books/{{ $book->id }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/books/create">Add New Book</a>
