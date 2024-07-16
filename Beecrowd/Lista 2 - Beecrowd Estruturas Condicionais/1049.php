<?php

    $mundo1 = readline();
    $mundo2 = readline();
    $mundo3 = readline();

    if ($mundo1 == "vertebrado"){
        if ($mundo2 == "ave"){
            if ($mundo3 == "carnivoro"){
                echo "aguia\n";
            }
            else{
                echo "pomba\n";
            }
        }
        else{
            if ($mundo3 == "onivoro"){
                echo "homem\n";
            }
            else{
                echo "vaca\n";
            }
        }
    }
    else{
        if ($mundo2 == "inseto"){
            if ($mundo3 == "hematofago"){
                echo "pulga\n";
            }
            else{
                echo "lagarta\n";
            }
        }
        else{
            if ($mundo3 == "hematofago"){
                echo "sanguessuga\n";
            }
            else{
                echo "minhoca\n";
            }
        }
    }

?>