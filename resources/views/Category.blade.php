<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td><?php ?>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 40px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    table {
        border-collapse: collapse;
        width: 60%;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 20px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e9f3ff;
        transition: 0.2s;
    }

    td {
        color: #333;
    }

    /* Judul halaman */
    h1 {
        text-align: center;
        color: #007bff;
        margin-bottom: 20px;
        font-size: 28px;
    }
</style>
