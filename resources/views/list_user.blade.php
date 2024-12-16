<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <style>
            body {
            background: linear-gradient(135deg, #a8ffe5, #db6318);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content-wrapper {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            margin-top: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-container {
            margin-bottom: 20px;
            text-align: right;
        }

        .btn {
            text-decoration: none;
            background-color: #0b5f5a;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #3b997d;
        }

        .btn-detail {
            text-decoration: none;
            background-color: #0b5f5a;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .btn-detail:hover {
            background-color: #3b997d;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table thead {
            background-color: #15946e;
            color: #fff;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            text-transform: uppercase;
            font-size: 14px;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 15px;
            }

            .table th, .table td {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <div class="btn-container">
        <a href="" class="btn btn-success">Tambah User</a>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['npm'] }}</td>
                        <td>{{ $user['nama_kelas'] }}</td>
                        <td><a href="{{ route('user.show', $user->id) }}" class="btn-detail">Detail</a></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
