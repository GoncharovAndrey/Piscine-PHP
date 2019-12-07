<?php
function auth($login, $passwd)
{
    if ($login && $passwd)
    {
        $account = unserialize(file_get_contents('../private/passwd'));
        if ($account)
        {
            $passwd_hash = hash('whirlpool', $passwd);
            foreach ($account as $log)
                if ($log['login'] === $_POST['login'] && $log['passwd'] === $passwd_hash)
                    return (true);
        }
    }
    return (false);
}
?>