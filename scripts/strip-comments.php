<?php


$commentTokens = array(T_COMMENT);

$fileStr = file_get_contents($argv[1]);
$tokens = token_get_all($fileStr);

$newStr = '';
foreach ($tokens as $token) {
    if (is_array($token)) {
        if (in_array($token[0], $commentTokens)) {
            continue;
        }

        $token = $token[1];
    }

    $newStr .= $token;
}

echo $newStr;