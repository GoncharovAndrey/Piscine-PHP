#!/usr/bin/php
<?php
    function ft_split_my($str)
    {
        $ret = explode(' ', $str);
        $ret = array_filter($ret, 'strlen');
        return $ret;
    }
    if ($argc > 1)
    {
        $ret = ft_split_my($argv[1]);
        $tmp = array_shift($ret);
        $i = 0;
        foreach ($ret as $value)
        {
            echo $value;
            if (i < count($ret))
                echo " ";
            $i++;
        }
        echo "$tmp";
        echo "\n";
    }
?>