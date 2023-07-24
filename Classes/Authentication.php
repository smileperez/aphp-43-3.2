<?php

namespace Classes;

use Traits\AppUserAuthentication as AppUserAuthentication;
use Traits\MobileUserAuthentication as MobileUserAuthentication;

class Authentication
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        AppUserAuthentication::authenticate as desktopAuth;
		MobileUserAuthentication::authenticate as mobileAuth;
    }

    public function doAuth($login, $password) {
        
        if ($this->desktopAuth($login, $password) == true) {
            return $login . ' ' . '- Успешная DESKTOP аутентифкация'.PHP_EOL;
        } else if ($this->mobileAuth($login, $password) == true) {
            return $login . ' ' . '- Успешная MOBILE аутентифкация'.PHP_EOL;
        } else {
            return new \Error('Ошибка аутентифкации');
        }
    }
}

?>