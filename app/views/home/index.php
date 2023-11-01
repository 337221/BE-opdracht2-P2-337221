<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-list">
            <li><a href="<?= URLROOT; ?>" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'navbar-item-active' : ''; ?>">Home</a></li>
            <li><a href="<?= URLROOT; ?>/instructeur" class="<?= (basename($_SERVER['PHP_SELF']) == 'instructeur.php') ? 'navbar-item-active' : ''; ?>">Instructeurs</a></li>
        </ul>
    </nav>
    <main>
        <section class="headline">
            <h2>Welkom op de homepage</h2>
            <p>Klik <a href="<?= URLROOT; ?>/instructeur">hier</a> om naar de instructeurs pagina te gaan.</p>
        </section>
    </main>
    <script src="<?= URLROOT; ?>/js/script.js"></script>
</body>
</html>