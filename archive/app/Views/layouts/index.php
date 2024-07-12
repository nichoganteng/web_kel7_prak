<!DOCTYPE html>
<!-- index.php -->
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tugas Layouting Pada BAB 4</title>
</head>
<body>
<header>
<nav>
<a href="/profile"><button>Profile</button></a>
<a href="/about"><button>About</button></a>
</nav>
</header>
<main>
<?= $this->renderSection('content') ?>
</main>
</body>
</html>