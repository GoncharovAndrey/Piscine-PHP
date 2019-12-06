#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    $month = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
    $day_week = array("", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    print_r($month);
    if ($argc < 2)
        exit();
    $date = explode(" ", $argv[1]);
    print_r($date);
    if (count($date) != 5 || preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $date[1], $date[1]) === 0 ||
        preg_match("/^[0-9]{4}$/", $date[3], $date[3]) === 0 ||
        preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4]) === 0) {
        echo "Wrong Format\n";
        exit();
    }
    $date[0] = array_search(lcfirst($date[0]), $day_week);
    $date[2] = array_search(lcfirst($date[2]), $month);
    if ($date[0] === false || $date[2] === false)
    {
        echo "Wrong Format\n";
        exit();
    }
    $time = mktime($date[4][1], $date[4][2], $date[4][3], $date[2], $date[1][0], $date[3][0]);
    if (date( "N", $time) == $date[0])
        echo "$time\n";
    else
        echo "Wrong Format\n";
?>