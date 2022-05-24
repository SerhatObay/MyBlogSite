<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Paylaş</title>
</head>
<body>

<form method="post" action="{{route('postCreatePost')}}" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" required>
    <label for="description">Description</label>
    <textarea type="text" name="description" required>

    </textarea>

    <label for="file">Resim</label>
    <input type="file" name="file">
    <button type="submit">Kaydet</button>

</form>
</body>
</html>
