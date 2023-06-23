<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .task-list {
            margin-top: 20px;
        }

        .task {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .task-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            text-decoration: none; 
        }
        .task-title a {
            text-decoration: none;
            color: black;
        }
        
        .task-title a:hover {
            color: black;
        }
        
        

        .task-description {
            color: #666;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .add-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .add-form h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .add-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .add-form input[type="text"],
        .add-form textarea {
            width: 97%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .add-form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .add-form button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-form button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <div class="container">
        @yield('add')
    </div>
    
    <div class="container">
        @yield('content')
    </div>

   

</body>
</html>
