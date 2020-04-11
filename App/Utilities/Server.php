<?php
namespace App\Utilities;

use phpseclib\Net\SSH2;

class Server
{
    static function ssh($cmd)
    {
        $host = env('SSH_HOST');
        $username = env('SSH_USERNAME');
        $password = env('SSH_PASSWORD');

        $ssh = new SSH2($host);
        if (!$ssh->login($username, $password)) {
            exit('Login Failed');
        }

        return $ssh->exec($cmd);
    }
}