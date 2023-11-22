function confirmation(){
    return confirm('Voulez-vous vraiment supprimer cette ligne ?')
}
function appendToInput(value) {
    var inputField = document.getElementById("inputField");
    inputField.value += value;
}

function clearInput() {
    var inputField = document.getElementById("inputField");
    inputField.value = "";
}

function deleteLastDigit() {
    var inputField = document.getElementById("inputField");
    var currentValue = inputField.value;
    if (currentValue.length > 0) {
        inputField.value = currentValue.slice(0, -1); // Supprimer le dernier caractère
    }
}

function appendDecimal() {
    var inputField = document.getElementById("inputField");
    var currentValue = inputField.value;
    // Vérifier si la virgule décimale n'est pas déjà présente
    if (currentValue.indexOf(".") === -1) {
        inputField.value += ".";
    }
}

function appendDoublezero() {
    var inputField = document.getElementById("inputField");
    var currentValue = inputField.value;
        inputField.value += "00";
    }

function appendTrizero() {
    var inputField = document.getElementById("inputField");
    var currentValue = inputField.value;
        inputField.value += "000";
}

function validateInput() {
    var inputField = document.getElementById("inputField");
    var inputValue = inputField.value;
    
    // Vous pouvez ajouter ici la logique de validation de la saisie
    // Par exemple, si vous voulez vérifier si la valeur est un nombre valide.
    
    // Pour cet exemple, nous allons simplement afficher une alerte avec la valeur saisie.
    alert("Vous avez saisi : " + inputValue);
}