<?php
$N = intval(readline());
for ($i = 0; $i < $N; $i++) {
    list($R, $S) = explode(" ", readline());
    if ($R == $S)
        echo "empate\n";
    else
        switch ($R) {
            case 'tesoura':
                switch ($S) {
                    case 'papel':
                        echo "rajesh\n";
                        break;
                    case 'lagarto':
                        echo "rajesh\n";
                        break;
                    case 'spock':
                        echo "sheldon\n";
                        break;
                    case 'pedra':
                        echo "sheldon\n";
                        break;
                }
                break;
            case 'papel':
                switch ($S) {
                    case 'pedra':
                        echo "rajesh\n";
                        break;
                    case 'spock':
                        echo "rajesh\n";
                        break;
                    case 'tesoura':
                        echo "sheldon\n";
                        break;
                    case 'lagarto':
                        echo "sheldon\n";
                        break;
                }
                break;
            case 'pedra':
                switch ($S) {
                    case 'tesoura':
                        echo "rajesh\n";
                        break;
                    case 'lagarto':
                        echo "rajesh\n";
                        break;
                    case 'spock':
                        echo "sheldon\n";
                        break;
                    case 'papel':
                        echo "sheldon\n";
                        break;
                }
                break;
            case 'lagarto':
                switch ($S) {
                    case 'papel':
                        echo "rajesh\n";
                        break;
                    case 'spock':
                        echo "rajesh\n";
                        break;
                    case 'tesoura':
                        echo "sheldon\n";
                        break;
                    case 'pedra':
                        echo "sheldon\n";
                        break;
                }
                break;
            case 'spock':
                switch ($S) {
                    case 'tesoura':
                        echo "rajesh\n";
                        break;
                    case 'pedra':
                        echo "rajesh\n";
                        break;
                    case 'papel':
                        echo "sheldon\n";
                        break;
                    case 'lagarto':
                        echo "sheldon\n";
                        break;
                }
                break;
        }
}