<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Pendaftaran Pasien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/image/Screenshot%202024-07-02%20065019.png'); /* Change the URL to your background image */
            background-size: cover;
            background-position: center;
        }
        .floating-action-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #38a169; /* Green color */
            color: white;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .floating-action-button:hover {
            background-color: #2f855a; /* Darker green */
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto mt-5 p-5 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-5">Halaman Pendaftaran Pasien</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($pasiens as $pasien): ?>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2"><?= esc($pasien['nama']) ?></h2>
                <p class="text-gray-700 mb-2"><strong>Keluhan:</strong> <?= esc($pasien['keluhan']) ?></p>
                <p class="text-gray-700 mb-2"><strong>Umur:</strong> <?= esc($pasien['umur']) ?></p>
                <p class="text-gray-700 mb-2"><strong>Riwayat Penyakit:</strong> <?= esc($pasien['riwayat_penyakit']) ?></p>
                <div class="flex justify-between mt-4">
                    <a href="/screen/edit/<?= $pasien['id'] ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                    <a href="/screen/delete/<?= $pasien['id'] ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="/screen/create" class="floating-action-button">+</a>
    </div>
</body>
</html>
