<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Saudi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-xs-10">
            <h2>To Do list</h2>
        </div>
        <div class="col-md-2 col-xs-2">
            <a href="{{ route('todo.create') }}" class="btn btn-primary" style="margin-top:  20px" role="button">Create
                Task</a>
        </div>
    </div>
    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-10 col-xs-10">
                        {{ $task->title }} - {{ $task->details }}
                    </div>
                    <div class="col-md-2 col-xs-2">
                        <a href="{{ route('todo.edit', [ $task->id]) }}" class="btn btn-info" role="button">Edit</a>
                        <form method="post" action="{{ route('todo.delete',[ $task->id]) }}">
                            <input type="hidden" name="_method" value="delete"/>
                            {{ csrf_field() }}
                            <button class="btn btn-danger" role="button">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>