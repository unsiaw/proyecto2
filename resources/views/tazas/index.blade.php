<form action="{{ route('upload.taza') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="fondo">
    <input type="submit" >
</form>