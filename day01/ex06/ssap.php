#!/usr/bin/php
<?php
    function ft_split_my($str)
    {
        $ret = explode(' ', $str);
        $ret = array_filter($ret, 'strlen');
        return $ret;
    }
    unset($argv[0]);
    if ($argv[1])
    {
        $ret  = ft_split_my($argv[1]);
        unset($argv[1]);
        if (argv[2])
        {
            foreach($argv as $value)
            $ret = array_merge($ret, ft_split_my($value));
        }
        sort($ret);
        foreach ($ret as $value)
            echo "$value\n";
    }
?>