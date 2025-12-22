<h1>Create Book</h1>

<form action="/books" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="author" placeholder="Author">
    <input type="number" name="pages" placeholder="Pages">
    <input type="text" name="user_id" placeholder="User ID">
    <input type="text" name="category_id" placeholder="Category ID">
    <button type="submit">Save</button>
</form>

<a href="/books">Back to List</a>
