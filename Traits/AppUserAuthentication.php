<?php

namespace Traits;

trait AppUserAuthentication 
{
    private $desktopLogin = 'desktop';
    private $desktopPassword = 'test';

    public function authenticate($login, $password):bool {
        if ($login == $this->desktopLogin and $password == $this->desktopPassword) {
            return true;
        } else {
            return false;
        }
    }
}

?>