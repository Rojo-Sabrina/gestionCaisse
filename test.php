<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page en trois colonnes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
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
            max-height: 600px;
            overflow-y: auto;
        }
        .custom-column {
            /* Ajoutez ce style pour définir une hauteur minimale et centrer le contenu */
            min-height: 500px;
        }
    </style>

<body>
<div class="container">
        <div class="row">
            <div class="col-4">
                <!-- Contenu de la première colonne -->
                <div>
                    <p><h1>1 : Ici le premier espace de travail</h1></p>
                </div>
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
            </div>
            <div class="col-5">
                <!-- Début de la deuxième colonne (divisée en deux lignes) -->
                <div class="row">
                    <!-- Première ligne à l'intérieur de la deuxième colonne -->
                    <div class="col-12">
                        <!-- Contenu de la première ligne -->
                        <p><h1>2 : Ici le deuxième espace de travail</h1></p>
                        <input type="text" id="inputField" readonly>                       
                    </div>
                </div>
                <div class="row">
                    <!-- Deuxième ligne à l'intérieur de la deuxième colonne -->
                    <div class="col-12 align-items-center">
                        <!-- Contenu de la deuxième ligne -->
                        <p><h1>3 : Ici le troisème espace de travail</h1></p>
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
                    </div>
                </div>
                <!-- Fin de la deuxième colonne divisée en deux lignes -->
            </div>
            <div class="col-3">
                <!-- Contenu de la troisième colonne -->
                <p><h1>4 : Ici le quatrième espace de travail</h1></p>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Script/script.js"></script>
</body>

</html>
