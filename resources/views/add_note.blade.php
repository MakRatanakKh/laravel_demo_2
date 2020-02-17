<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Note</title>
</head>
<body>

<form action="/add_note" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputTitle">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputTitle">
        <span id="emailHelp" class="form-text text-danger" style="color:red;">
            @if($errors != null)
                {{ $errors->first('title') }}
            @endif
        </span>
    </div>
    <div class="form-group">
        <label for="exampleInputDescription">Description</label>
        <textarea name="description" class="form-control" id="exampleInputDescription"></textarea>
        <span id="emailHelp" class="form-text text-danger" style="color:red;">
            @if($errors != null)
                {{ $errors->first('description') }}
            @endif
        </span>
    </div>
{{--    <div class="form-group">--}}
{{--        <label for="exampleInputEmail">Email</label>--}}
{{--        <input type="text" name="email" class="form-control" id="exampleInputEmail">--}}
{{--        <span id="emailHelp" class="form-text text-danger" style="color:red;">--}}
{{--            @if($errors != null)--}}
{{--                {{ $errors->first('email') }}--}}
{{--            @endif--}}
{{--        </span>--}}
{{--    </div>--}}

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
