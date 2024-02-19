<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Zaprojektuj swoje trampki</title>
    <meta name="author" content="Michał Zalewski"/>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<header>
    <h1>Zadanie 13 - zaprojektuj własne trampki</h1>
    <h2>Autor: Michał Zalewski 4ip_1</h2>
</header>
<div class="container">
    <h2>Formularz konkursu "Podrasuj swoje buty!"</h2>
    <p>
        Chcesz zamienić swoje stare trampki na nową parę zaproejtkowanych przez
        siebie butów Forcefield? Napisz nam, dlaczego sądzisz, że powinieneś
        pożegnać się ze swoimi wysłużonymi butami, a być możę zostaniesz jednym
        z laureatów konkursu!
    </p>

    <form id="myForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <fieldset>
            <legend>Podstawowe dane</legend>

            <div>
                <label for="imie">Imię i nazwisko</label>
                <input type="text" id="imie" name="imie"/>
            </div>

            <div>
                <label for="email">E-mail: </label>
                <input type="email" id="email" name="email"/>
            </div>

            <div>
                <label for="nrTel">Telephone: </label>
                <input type="tel" id="nrTel" name="nrTel"/>
            </div>

            <div>
                <p>Moje buty są TAKIE stare.</p>
                <label for="area"></label>
                <textarea name="komentarz" id="area" cols="30" rows="10"></textarea>
            </div>
        </fieldset>

        <h2>Zaprojektuj własne buty</h2>
        <fieldset>
            <legend>Własny projekt butów</legend>
            <fieldset>
                <legend>Kolor (wybierz jeden)</legend>
                <div>
                    <label for="czerwony">czerwony</label>
                    <input
                            type="radio"
                            value="czerwony"
                            id="czerwony"
                            checked="checked"
                            name="kolor1"
                    />
                </div>
                <div>
                    <label for="niebieski">niebieski</label>
                    <input
                            type="radio"
                            value="niebieski"
                            id="niebieski"
                            name="kolor2"
                    />
                </div>
                <div>
                    <label for="czarny">czarny</label>
                    <input type="radio" name="kolor3" id="czarny" value="czarny"/>
                </div>
                <div>
                    <label for="srebrny">srebrny</label>
                    <input type="radio" name="kolor4" value="srebrny" id="srebrny"/>
                </div>
            </fieldset>
            <fieldset>
                <legend>Opcje (możesz wybrać kilka)</legend>
                <div>
                    <label for="ch1">Błyszczące sznurówki</label>
                    <input type="checkbox" name="sznurowki1" id="ch1"/>
                </div>
                <div>
                    <label for="ch2">Metalowe logo</label>
                    <input type="checkbox" name="sznurowki2" id="ch2"/>
                </div>
                <div>
                    <label for="ch3">Świecące podeszwy</label>
                    <input type="checkbox" name="sznurowki3" id="ch3"/>
                </div>
                <div>
                    <label for="ch4">Odtwarzanie MP3</label>
                    <input type="checkbox" name="sznurowki4" id="ch4"/>
                </div>
            </fieldset>
            <fieldset>
                <legend>Rozmiar</legend>
                <div>
                    <label for="size"
                    >Rozmiar zgodny ze standardowymi numerami butów:
                    </label>
                    <select id="size" name="rozmiar">
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                    </select>
                </div>
            </fieldset>
        </fieldset>
        <button type="submit">Podrasuj swoje buty!</button>
        <button>reset :)</button>
    </form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $nrTel = $_POST['nrTel'];
    $komentarz = $_POST['komentarz'];
    $kolor1 = $_POST['kolor1'];
    $kolor2 = $_POST['kolor2'];
    $kolor3 = $_POST['kolor3'];
    $kolor4 = $_POST['kolor4'];
    $sznurowki1 = $_POST['sznurowki1'];
    $sznurowki2 = $_POST['sznurowki2'];
    $sznurowki3 = $_POST['sznurowki3'];
    $sznurowki4 = $_POST['sznurowki4'];
    $rozmiar = $_POST['rozmiar'];
    echo $imie . $email . $nrTel . $komentarz . $kolor1 . $kolor2 . $kolor3 . $kolor4 . $sznurowki1 . $sznurowki2 . $sznurowki3 . $sznurowki4 . $rozmiar;
}
?>
<footer>Zespół Szkół Politechnicznych &copy; Zalewski MIchał 4IP_1</footer>
</body>
</html>
