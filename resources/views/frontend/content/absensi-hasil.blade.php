<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Absensi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets/Backend/css/bootstrap.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #002147, #002147, #002147);
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .status {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .status.tepat-waktu { color: green; }
        .status.terlambat { color: red; }
        .status.tidak-masuk { color: orange; }

        .back-btn {
            margin-top: 1rem;
            background: #002147;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Hasil Absensi</h2>
        <p><strong>NISN:</strong> {{ $siswa->nisn }}</p>
        <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
        <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
        <p><strong>Tanggal Masuk:</strong> {{ $siswa->tanggal_masuk }}</p>
        <p><strong>Jam Masuk:</strong> {{ $siswa->jam_masuk }}</p>
        <p class="status 
            @if($siswa->status_keberangkatan == 'Tepat Waktu') tepat-waktu
            @elseif($siswa->status_keberangkatan == 'Terlambat') terlambat
            @else tidak-masuk
            @endif">
            <strong>Status Keberangkatan:</strong> {{ $siswa->status_keberangkatan }}
        </p>
        <a href="{{ url('/absensi') }}" class="back-btn">Kembali</a>
    </div>
</body>
</html>
