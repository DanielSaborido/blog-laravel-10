<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="type">Type:</label>
    <select name="type" id="type">
        <option value="text">Text</option>
        <option value="image">Image</option>
    </select>
    <br>

    <label for="content">Content:</label>
    <textarea name="content" id="content"></textarea>
    <br>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <br>

    <button type="submit">Create Post</button>
</form>
