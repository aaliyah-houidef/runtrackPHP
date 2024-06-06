<?php

function leetSpeak($str) {
    $leetMap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $leetStr = '';
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        $leetStr .= isset($leetMap[$char]) ? $leetMap[$char] : $char;
    }

    return $leetStr;
}

$str = "Salut, comment ça va ?";
$leetStr = leetSpeak($str);
echo "Leet Speak : " . $leetStr;

?>
