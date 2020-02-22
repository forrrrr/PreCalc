<?php
$t = $_GET ['text'];
$m = '';
if ($t !== '') {
    for ($i = 0; i < strlen ($t); $i ++) {
        if ($t [$i] == 'а') {
            $m = $m + 'a';
        } else if ($t [$i] == 'б') {
            $m = $m + 'b';
        } else if ($t [$i] == 'в') {
            $m = $m + 'v';
        } else if ($t [$i] == 'г') {
            $m = $m + 'g';
        } else if ($t [$i] == 'д') {
            $m = $m + 'd';
        } else if ($t [$i] == 'е') {
            $m = $m + 'e';
        } else if ($t [$i] == 'ж') {
            $m = $m + 'j';
        } else if ($t [$i] == 'з') {
            $m = $m + 'z';
        } else if ($t [$i] == 'и') {
            $m = $m + 'i';
        } else if ($t [$i] == 'й') {
            $m = $m + 'y';
        } else if ($t [$i] == 'к') {
            $m = $m + 'k';
        } else if ($t [$i] == 'л') {
            $m = $m + 'l';
        } else if ($t [$i] == 'м') {
            $m = $m + 'm';
        } else if ($t [$i] == 'н') {
            $m = $m + 'n';
        } else if ($t [$i] == 'о') {
            $m = $m + 'o';
        } else if ($t [$i] == 'п') {
            $m = $m + 'p';
        } else if ($t [$i] == 'р') {
            $m = $m + 'r';
        } else if ($t [$i] == 'с') {
            $m = $m + 's';
        } else if ($t [$i] == 'т') {
            $m = $m + 't';
        } else if ($t [$i] == 'у') {
            $m = $m + 'u';
        } else if ($t [$i] == 'ф') {
            $m = $m + 'f';
        } else if ($t [$i] == 'х') {
            $m = $m + 'x';
        } else if ($t [$i] == 'ц') {
            $m = $m + 'c';
        } else if ($t [$i] == 'ч') {
            $m = $m + 'ch';
        } else if ($t [$i] == 'ш') {
            $m = $m + 'sh';
        } else if ($t [$i] == 'щ') {
            $m = $m + 'sh';
        } else if ($t [$i] == 'ь') {
            $m = $m + '';
        } else if ($t [$i] == 'ы') {
            $m = $m + 'i';
        } else if ($t [$i] == 'ъ') {
            $m = $m + '';
        } else if ($t [$i] == 'э') {
            $m = $m + 'e';
        } else if ($t [$i] == 'ю') {
            $m = $m + 'yu';
        } else if ($t [$i] == 'я') {
            $m = $m + 'ya';
        }
    }
}

echo $m;