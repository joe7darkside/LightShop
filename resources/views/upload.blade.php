<form action="/image/upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" id="image" name="image">
    <button type="submit">upload</button>
</form>