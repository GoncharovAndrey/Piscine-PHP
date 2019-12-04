#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $tmp_s = $tab;
    $tmp_rs = $tab;
    sort($tmp_s);
    rsort($tmp_rs);
    if (!array_diff_assoc($tab, $tmp_s) || !array_diff_assoc($tab, $tmp_rs))
        return (true);
    return (false);
}
?>
