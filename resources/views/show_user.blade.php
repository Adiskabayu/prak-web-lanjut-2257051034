<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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

        .card {
            background: linear-gradient(135deg, #2f705c, #edb490);
            border-radius: 25px;
            padding: 40px;
            width: 320px;
            text-align: center;
            backdrop-filter: blur(1px);
            transition: transform 0.3s ease;
        }

        .profile-pp img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid rgba(62, 243, 219, 0.5);
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }

        .profile-pp:hover {
            transform: translateY(-5px);
        }

        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 25px rgba(34, 228, 241, 0.5);
            border: 5px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .info {
            color: #58d68d;
        }

        .label {
            margin: 10px 0;
            padding: 10px;
            background-color: #7b625e;
            border-radius: 10px;
            color: #00ffe1;
            font-size: 20px;
            font-weight: bold;
        }

        .btn-kembali {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            margin: 0.5rem 0;
            transition: background-color 0.3s ease;
            background-color: #1e8494;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="profile-pp">
        <img src="{{ asset('storage/'. $user->foto) }}" alt="Profile Image" class="profile-img">
    </div>
    <h1 class="label">{{ $user->nama }} </h1>
        <h1 class="label">{{ $user->npm }}  </h1>
        <h1 class="label">{{ $nama_kelas  ?? 'Kelas tidak ditemukan' }}</h1>
        <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
</div>

</body>
</html>
