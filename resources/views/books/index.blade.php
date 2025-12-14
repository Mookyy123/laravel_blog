<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>

<h1>Available Books</h1>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Price ($)</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book['title'] }}</td>
        <td>{{ $book['author'] }}</td>
        <td>{{ $book['price'] }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
