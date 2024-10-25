<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Task manager</title>
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

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
}

th {
    background-color: #f2f2f2;
    color: #333;
}

a {
    
    text-decoration: none;
    margin-left: 10px;
}

.edit{
    background-color: green;
}

.edit:hover{
    background-color: darkgreen;
}

.delete{
    background-color: red;
}

.delete:hover{
    background-color: darkred;
}

    </style>
</head>
<body>
    <h1>Task Manager</h1>

    <form action="/save" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="text" name="task" required>
        <button type="submit">Save</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $id => $task): ?>
                <tr>
                    <td><?php echo htmlspecialchars($task); ?></td>
                    <td>
                        <a href="/edit/<?php echo $id; ?>"><button class="edit">Edit</button></a>
                        <form method="POST" action="/delete/<?php echo $id; ?>" onsubmit="return confirm('Are you sure you want to delete this task?');">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" class="delete">Delete</button>
                        
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>