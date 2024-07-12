<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/crud.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
        </nav>
    </header>
    <?= $this->renderSection('content')?>
</body>
</html>