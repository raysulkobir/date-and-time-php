<?php
    echo time();
    echo mktime(0,0,0,1,1,2022);
    echo "------------".PHP_EOL;

    echo (mktime(0, 0, 0, 1, 1, 2022) - time()) / (60 * 60 * 24);
    echo PHP_EOL."------------".PHP_EOL;
    echo (mktime(0, 0, 0, 1, 1, 2022) - mktime(0, 0, 0, 5, 1, 2022)) / (60 * 60 * 24);