#!/usr/bin/php
<?php
if ($argc == 2)
{
    $fd = fopen($argv[1], 'r');
    while (!feof($fd))
    {
        $file = fgets($fd);
        $file = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches) {
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
        }, $file);
        $file = preg_replace_callback('/<a.*?>(.*?)</', function ($matches) {
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
        }, $file);
        echo $file;
    }
}
?>