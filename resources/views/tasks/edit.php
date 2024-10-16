<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
               body {
    font-family: Arial, sans-serif;
    background-color: white;
    margin: 0;
    padding: 20px;
}


form {
    margin-bottom: 20px;
}

input[type="text"] {
    padding: 10px;
    width: 300px;
    margin-right: 10px;
    border: 1px solid black;
    border-radius: 4px;
}

button {
    padding: 10px 15px;
    background-color: green;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: darkgreen;
}

.back{
    background-color: red;
}

.back:hover{
    background-color: darkred;
}

</style>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="/update/<?php echo $id; ?>" method="POST" onsubmit=" return confirm('Are you sure you want to update this task?');">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
    <input type="text" name="task" value="<?php echo $task; ?>" required>
    <button type="submit" >Update</button>
</form>


    <a href="/"><button class="back">Back</button></a>
    
</body>
</html>