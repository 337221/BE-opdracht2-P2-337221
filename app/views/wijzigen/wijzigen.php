<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Wijzigen</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-list">
            <li><a href="<?= URLROOT; ?>" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'navbar-item-active' : ''; ?>">Home</a></li>
            <li><a href="<?= URLROOT; ?>/instructeur" class="<?= (basename($_SERVER['PHP_SELF']) == 'instructeur.php') ? 'navbar-item-active' : ''; ?>">Instructeurs</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        <div class="circle"></div>
        <div class="circle"></div>
        <h1>
            <?= $data['title']; ?>
        </h1>
        <div class="card mt-4">
            <div class="card-body">
                <form action="../../update" method="post">
                    <div class="inputVeld">
                        <label for="instructeur">
                            Instructeur:
                            <select name="instructeur" id="instructeur">
                                <option hidden>Kies een Instructeur</option>
                                <option value="1">Li Zhan</option>
                                <option value="2">Leroy Boerhaven</option>
                                <option value="3">Youri van Veen</option>
                                <option value="4">Bert van Sali</option>
                                <option value="5">Mohammed El Yassidi</option>
                            </select>
                        </label>
                    </div>
                    <div class="inputVeld">
                        <label for="typeVoertuig">
                            Type Voertuig:
                            <select name="typeVoertuig" id="typeVoertuig" required>
                                <option value="1">Personenauto</option>
                                <option value="2">Vrachtwagen</option>
                                <option value="3">Bus</option>
                                <option value="4">Bromfiets</option>
                            </select>
                        </label>
                    </div>
                    <div class="inputVeld">
                        <label for="autoMerk">
                            Type:
                            <input type="text" name="autoMerk" id="autoMerk" value="<?= $data['autoMerk']; ?>" required>
                        </label>
                    </div>
                    <div class="inputVeld">
                        <label for="bouwjaar">
                            Bouwjaar:
                            <input type="date" name="bouwjaar" id="bouwjaar" required="" value="<?= $data['bouwjaar'] ?>">
                        </label>
                    </div>
                    <div class="inputVeld">
                        <label for="brandstof">
                            Brandstof:
                        </label>
                        <input type="radio" id="brandstof" name="brandstof" value="Diesel">
                        <label for="Diesel">Diesel</label>
                        <input type="radio" id="brandstof" name="brandstof" value="Benzine">
                        <label for="Benzine">Benzine</label>
                        <input type="radio" id="brandstof" name="brandstof" value="Elektrisch">
                        <label for="Elektrisch">Elektrisch</label>
                    </div>
                    <div class="inputVeld">
                        <label for="kenteken">
                            Kenteken:
                        </label>
                        <input type="text" name="kenteken" id="kenteken" value="<?= $data['kenteken']; ?>" required>
                    </div>
                    <input type="hidden" name="voertuig" id="voertuig" value="<?= $data['id'] ?>">
                    <div class="button mt-3">
                        <button class="btn btn-primary">
                            <i class="ri-edit-line"></i> Wijzigen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script>
        function setGeselecteerd(elementId, desiredValue) {
            const element = document.getElementById(elementId);
            for (let option of element.options) {
                if (option.value === desiredValue) {
                    option.selected = true;
                    return; 
                }
            }
        }
        function setGeselecteerdRadio(name, desiredValue) {
            const radioButtons = document.getElementsByName(name);
            for (let radioButton of radioButtons) {
                if (radioButton.value === desiredValue) {
                    radioButton.checked = true;
                    return; 
                }
            }
        }
        setGeselecteerd("instructeur", "<?= $data['instructeur']; ?>");
        setGeselecteerd("typeVoertuig", "<?= $data['typeVoertuig']; ?>");
        setGeselecteerdRadio("brandstof", "<?= $data['brandstof']; ?>");
        </script>
        <script src="<?= URLROOT; ?>/js/script.js"></script>
    </div>
</body>
</html>