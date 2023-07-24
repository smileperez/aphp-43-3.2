<?php
declare(strict_types=1);

require_once __DIR__ . '.\autoload.php';
Autoload::initial();

use Classes\Authentication as Authentication;

$user = new Authentication();
echo $user->doAuth('desktop', 'test');
echo $user->doAuth('mobile', 'test');
echo $user->doAuth('hacker', 'password');

