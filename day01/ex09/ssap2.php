#!/usr/bin/php
<?php
    function ft_split_my($str)
    {
        $ret = explode(' ', $str);
        $ret = array_filter($ret, 'strlen');
        return $ret;
    }
       function my_sort($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);
        $sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $length = strlen($a) < strlen($b) ? strlen($a) : strlen($b);
        for ($i = 0; $i < $length; $i++)
        {
            $aa = substr($a, $i, 1);
            $bb = substr($b, $i, 1);
            $ia = array_search($aa, $sort);
            $ib = array_search($bb, $sort);
            $ia = $ia === false ? ord($aa) + 100 : $ia ;
            $ib = $ib === false ? ord($bb) + 100 : $ib ;
            if ($ib < $ia)
                return true;
            if ($ib > $ia)
                return false;
        }
        return strlen($a) <= strlen($b) ? true: false;
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
        usort($ret, "my_sort");
        foreach ($ret as $value)
            echo "$value\n";
    }
    print_r($tab);
?>