<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="flex justify-center flex-col w-screen pt-20 ">
    <form method="post" action="{{route("saveTask")}}" class="mx-auto flex flex-col w-80 gap-10 p-5 bg-white rounded-md shadow">
        <h2>Enter Task</h2>
        {{csrf_field()}}
        <input type="text" placeholder="task name" name="title" class="custom-input">
        <input type="text-area" name="description" id="" placeholder="description" class="custom-input">
        <button type="submit">Submit</button>
    </form>
</body>

</html>