<link rel="stylesheet" href="style.css">
<form method="post" id="form">
    <label for="nrOfDie" id="textInput">Number of die to roll: <input type="text" name="nrOfDie"></label>
    <label for="amountOfSides" id="optionInput">
        <select name="amountOfSides">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <input type="submit">
        </select>
    </label>
</form>

<?php

$numberOfDie = $_POST["nrOfDie"];
$amountOfSides = $_POST["amountOfSides"];

if ($numberOfDie != null && $amountOfSides != null) {
    echo "<div id=divResult>";
    for ($i = 1; $i < $numberOfDie + 1; $i++) {
        $randomInteger = rand(1, $amountOfSides);
        

        $sumOfAllDie += $randomInteger;

        echo "<p id='result'>" . "Dice $i generated: " . $randomInteger;
    }

    echo "</div>" . "<p id='total'>" . "A total of $numberOfDie die, with $amountOfSides sides each were rolled" . ", the sum of all $numberOfDie die is $sumOfAllDie";
}

?>