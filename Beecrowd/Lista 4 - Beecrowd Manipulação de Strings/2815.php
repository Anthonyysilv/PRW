<?php
$entrada = explode(" ", readline());
for ($i = 0; $i < count($entrada); $i++) {
    if (strlen($entrada[$i]) >= 4)
        if (substr($entrada[$i], 0, 2) == substr($entrada[$i], 2, 2))
            $entrada[$i] = substr($entrada[$i], 2);
}
echo implode(" ", $entrada) . "\n";