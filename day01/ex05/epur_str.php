#!/usr/bin/php
<?php
    if ($argv[1])
    {
        $ret = explode(" ", $argv[1]);
        $ret = array_filter($ret);
        $len = count($ret);
        $i = 1;
        foreach ($ret as $value)
        {
            echo "$value";
            if ($i < $len)
                echo " ";
            $i++;
        }
    }
    echo "\n";
?>