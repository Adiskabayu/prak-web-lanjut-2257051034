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
                color: white;
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

            .view, .edit, .delete {
                text-decoration: none;
                padding: 5px 10px;
                border-radius: 4px;
                color: #fff;
                font-size: 0.9rem;
                font-weight: bold;
                margin-right: 5px;
                transition: background-color 0.3s ease;
            }

            .view {
                background-color: #1f98d0;
            }

            .view:hover {
                background-color: #138496;
            }

            .edit {
                background-color: #07714c;
            }

            .edit:hover {
                background-color: #0c7145;
            }

            .delete {
                background-color: #dad048;
                border: none;
            }

            .delete:hover {
                background-color: #c82333;
            }

            @media (max-width: 768px) {
                .content-wrapper {
                    padding: 15px;
                }

                .table th, .table td {
                    font-size: 14px;
                    padding: 10px;
                }

                .btn-container {
                    text-align: center;
                }

                .btn {
                    padding: 8px 16px;
                    font-size: 0.9rem;
                }
            }

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
