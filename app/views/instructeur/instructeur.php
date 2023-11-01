<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Instructeurs</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-center">
            <ul class="navbar-list">
                <li><a href="<?= URLROOT; ?>" class="navbar-item">Home</a></li>
                <li><a href="<?= URLROOT; ?>/instructeur" class="navbar-item-active">Instructeurs</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section class="headline">
            <h1><?= $data['title']; ?></h1>
            <h3>Aantal instructeurs: <?= $data['TotalInstr']; ?></h3>
        </section>
        <section class="content-container">
            <div class="circle"></div>
            <div class="circle"></div>
            <section class="content-table">
                <div class="card table-container">
                    <div class="ruimte">
                        <table>
                            <thead>
                                <th>Voornaam</th>
                                <th>Tussenvoegsel</th>
                                <th>Achternaam</th>
                                <th>Mobiel</th>
                                <th>Datum in dienst</th>
                                <th>Aantal sterren</th>
                                <th>Voertuigen</th>
                            </thead>
                            <tbody>
                                <?= $data['rows']; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <script src="<?= URLROOT; ?>/js/script.js"></script>
</body>
</html>
