<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Delete</title>
</head>
<body>
<nav class="navbar">
        <div class="navbar-center">
            <ul class="navbar-list">
                <li><a href="<?= URLROOT; ?>" class="navbar-item">Home</a></li>
                <li><a href="<?= URLROOT; ?>/instructeur" class="navbar-item-active">Instructeurs</a></li>
                <li><a href="<?= URLROOT; ?>/allevoertuigen" class="navbar-item">Alle voertuigen</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>

        <div class="card">
            <div class="ruimte">
                <h2><?= $data['title']; ?></h2>
            </div>
        </div>
    </div>
    <script src="<?= URLROOT; ?>/js/nav.js"></script>
</body>
</html>