<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create new Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Create New Task</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" method="post" action="{{ route('todo.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ old('title') }}" id="title" placeholder="Hello World" name="title">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="details">Details:</label>
            <div class="col-sm-10">
                <textarea  class="form-control" value="{{ old('details') }}" id="details" name="details"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="col-sm-offset-20 col-sm-5">
                    <a role="button" href="{{ route('todo.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>

        </div>
    </form>
</div>

</body>
</html>
