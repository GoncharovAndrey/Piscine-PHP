<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
    {
        $account = unserialize(file_get_contents('../private/passwd'));
        if ($account)
        {
            foreach ($account as $i => $num)
            {
                if ($num['login'] === $_POST['login'] && $num['passwd'] === hash('whirlpool', $_POST['oldpw']))
                {
                    $err = 0;
                    $account[$i]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                    file_put_contents('../private/passwd', serialize($account));
                    echo "OK\n";
                    return;
                }
            }
        }
    }
    echo "ERROR\n";
?>