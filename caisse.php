<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau avec Barre de Défilement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .scrollable-table {
            max-height: 700px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="scrollable-table">
        <table>
            <tr>
                <th>Déscription</th>
                <th>Quantités</th>
                <th>Prix Unitaire</th>
                <th>Montant toltal</th>
            </tr>
            <?php
            // Générer 100 lignes à titre d'exemple, mais vous pouvez augmenter ou diminuer ce nombre selon vos besoins
            for ($i = 1; $i <= 100; $i++) {
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <input type="text" id="inputField" readonly>
            <table id="numPad">
                <tr>
                    <td><button class="number-button" onclick="appendToInput(1)">1</button></td>
                    <td><button class="number-button" onclick="appendToInput(2)">2</button></td>
                    <td><button class="number-button" onclick="appendToInput(3)">3</button></td>
                    <td><button class="clear-button" onclick="clearInput()">C</button></td>
                </tr>
                <tr>
                    <td><button class="number-button" onclick="appendToInput(4)">4</button></td>
                    <td><button class="number-button" onclick="appendToInput(5)">5</button></td>
                    <td><button class="number-button" onclick="appendToInput(6)">6</button></td>
                    <td><button class="delete-button" onclick="deleteLastDigit()">EFF</button></td>
                </tr>
                <tr>
                    <td><button class="number-button" onclick="appendToInput(7)">7</button></td>
                    <td><button class="number-button" onclick="appendToInput(8)">8</button></td>
                    <td><button class="number-button" onclick="appendToInput(9)">9</button></td>
                    <td><button class="validate-button" onclick="validateInput()">OK</button></td>
                </tr>
                <tr>
                    <td><button class="number-button" onclick="appendDoublezero()">00</button></td>
                    <td><button class="number-button" onclick="appendToInput(0)">0</button></td>
                    <td><button class="decimal-button" onclick="appendTrizero()">000</button></td>
                    <td><button class="decimal-button" onclick="appendDecimal()">.</button></td>
                </tr>
            </table>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
