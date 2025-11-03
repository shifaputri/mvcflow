<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td><?php ?>
            <td>{{ $item->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<style>
    /* Reset dan gaya dasar */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f6f8;
        margin: 0;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        color: #007bff;
        font-size: 28px;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Gaya tabel */
    table {
        border-collapse: collapse;
        width: 70%;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    th, td {
        padding: 14px 20px;
        text-align: left;
        font-size: 16px;
    }

    th {
        background-color: #007bff;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e8f2ff;
        transition: background-color 0.3s ease;
    }

    td {
        color: #333;
    }

    /* Responsif di layar kecil */
    @media (max-width: 768px) {
        table {
            width: 100%;
        }

        th, td {
            padding: 10px;
            font-size: 14px;
        }
    }
</style>
