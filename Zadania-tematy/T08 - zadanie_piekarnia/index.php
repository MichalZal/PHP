<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piekarnia</title>
    <meta name="author" content="Michał Zalewski">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Zamówienie online</h1>
        <h2>Autor: Michał Zalewski</h2>
    </header>
    <main>
    <form action="order.php" method="post">
        <div class="form-dane">
            <div class="inp">
                <label for="imie">Podaj imię: </label>
                <input type="text" id="imie" name="imie">
            </div>
            <div class="inp">
                <label for="nazwisko">Podaj nazwisko: </label>
                <input type="text" id="nazwisko" name="nazwisko">
            </div>
            <div class="inp">
                <label for="wiek">Podaj wiek: </label>
                <input type="number" id="wiek" name="wiek">
            </div>
        </div>
        <div class="form-zamowienie">
            <div class="inp">
                <label for="paczInp">Ile pączków (0.99 PLN/szt):</label>
                <input type="number" name="paczkow" id="paczInp"/>
            </div>
            <div class="inp">
                <label for="grzebInp">Ile grzebieni (1.29 PLN/szt):</label>
                <input type="number" name="grzebieni" id="grzebInp"/>
            </div>
            <div class="inp">
                <label for="drozdzInp">Ile drożdżówek (2.00 PLN/szt):</label>
                <input type="number" name="drozdz" id="drozdzInp"/>
            </div>
            <div>
                <label for="dostawa">Sposób dostawy: </label>
                <select value="Wybierz sposób dostawy" name="dostawa" id="dostawa">
                    <option value="odbior">Odbiór osobisty +0.00zł</option>
                    <option value="kurier">Dostawa kuriera +7.00zł</option>
                    <option value="paczkomat">Paczkowmat +5.00zł</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Wyślij zamówienie"/>
    </main>
</form>
</body>
</html>




