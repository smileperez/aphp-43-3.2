<?php

namespace Traits;

trait MobileUserAuthentication
{
    private $mobileLogin = 'mobile';
    private $mobilePassword = 'test';

    public function authenticate($login, $password):bool {
        if ($login == $this->mobileLogin and $password == $this->mobilePassword) {
            return true;
        } else {
            return false;
        }
    }
}

?>