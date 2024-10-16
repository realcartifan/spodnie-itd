<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $koszulki = 7,99
    $spodnie = 49.29
    $czapki = 19,90

    $ilosckoszulki = $_POST['koszulki'];
    $iloscspodnie = $_POST['spodnie'];
    $iloscczapki = $_POST['czapki'];

    $nettokoszulka = ($ilosckoszulki * $cenakoszulki)
    $nettspodni = ($iloscspodnie * $cenaspodni)
    $nettokoszulka = ($iloscczapek * $cenacapek)

    $sumaneto = ($nettokoszulka + $nettspodni + $nettokoszulka )

    echo "cena neto zamówionych koszulek" ($nettokoszulka)
    echo "cena netto zamówionych spodni" ($nettspodni)
    echo "cena netto zamówionych czapek" ($nettokoszulka)

    $bruttok = ($nettokoszulka * 0,22)
    $bruttos = ($nettspodni * 0,22)
    $bruttoc = ($nettokoszulka * 0,22)
    $sumab = ($bruttok + $bruttos + $bruttoc )

    echo "cena brutto koszulek" ($bruttok)
    echo "cena brutto spodni" ($bruttos)
    echo "cena brutto czapek" ($bruttoc)
    echo "suma brutto zamówienia" ($sumab)




 ?>


</body>
</html>