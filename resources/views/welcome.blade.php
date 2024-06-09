<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <h2>Enter Task</h2>
    <form method="post" action="{{route("saveTask")}}">
        {{csrf_field()}}
        <input type="text" placeholder="task name" name="title" >
        <input type="text-area" name="description" id="" placeholder="description">
        <button type="submit">Submit</button>
    </form>
    <br>
    <div>
        @foreach ($taskList as $task)
            <span>{{$task->id}}</span>
            <span>{{$task->title}}</span>
            <span>{{$task->description}}</span>
            <form method="post" action="{{route("deleteTask", $task->id)}}">
                {{csrf_field()}}
                <button>delete</button>
            </form>
            <br>
        @endforeach
    </div>

</body>

</html>