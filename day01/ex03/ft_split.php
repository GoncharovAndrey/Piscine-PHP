#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $ret = explode(' ', $str);
        $ret = array_filter($ret, 'strlen');
        sort($ret);
        return $ret;
    }
?>
