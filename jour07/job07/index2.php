<?php
function gras($str) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_upper($char)) {
            $result .= '<b>' . $char . '</b>';
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function cesar($str, $decalage = 2) {
    $result = '';
    $decalage = intval($decalage);
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? 'A' : 'a';
            $result .= chr(((ord($char) - ord($base) + $decalage) % 26) + ord($base));
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    $words = explode(' ', $str);
    $result = '';
    foreach ($words as $word) {
        if (substr($word, -2) == 'me') {
            $result .= $word . '_ ';
        } else {
            $result .= $word . ' ';
        }
    }
    return trim($result);
}

if (isset($_GET['str']) && isset($_GET['fonction'])) {
    $str = $_GET['str'];
    $fonction = $_GET['fonction'];
    $resultat = '';

    if ($fonction == 'gras') {
        $resultat = gras($str);
    } elseif ($fonction == 'cesar') {
        $resultat = cesar($str);
    } elseif ($fonction == 'plateforme') {
        $resultat = plateforme($str);
    }

    echo "<p id='resultat'>$resultat</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de transformation de texte</title>
</head>
<body>
    <form method="GET" action="">
        <label for="str">Texte :</label>
        <input type="text" name="str">
        
        <label for="fonction">Fonction :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>
