<?php

namespace App\Libraries;

use CodeIgniter\Cookie\Cookie;
use CodeIgniter\Cookie\CookieStore;
use Config\Services;

class Auth_lib
{

    /**
     * Sebuah library untuk fungsi-fungsi normal yang reusable seputar Auth
     *
     * @var [type]
     */
    public $securityAuthPass;
    private $parapase, $chip;

    public $cookie_data;

    public function __construct()
    {
        helper('cookie');
        $this->parapase = 'egl0821evergreen';
        $this->chip = 'AES-128-CBC';

        $this->cookie_data = new CookieStore([]);
    }

    public function textToHash($password)
    {
        $encrypt = openssl_encrypt($password, $this->chip, $this->parapase, 0, $this->parapase);
        return $encrypt;
    }

    public function hashToText($hash)
    {
        $decrypt = openssl_decrypt($hash, $this->chip, $this->parapase, 0, $this->parapase);
        return $decrypt;
    }


    public function set_cookie($key, $val, $day)
    {
        $cookie = new Cookie(
            $key,
            $val,
            [
                'samesite' => null,
                'path' => '/',
                'httponly' => false,
                'max-age' => 3600 * 24 * $day, // Expires in 2 hours
            ]
        );

        set_cookie($cookie);

    }

    public function get_cookie($key)
    {
        if (cookies()->has($key)) {
            $data = cookies()->get($key); // array of Cookie objects
            return $data['value'];
        }
        return null;
    }

    public function getAll_cookie(array $key)
    {
        // alternatively, you can use the display method
        $output = [];
        foreach ($key as $val) {
            $value_cookie = $this->get_cookie($val);
            $output[$val] = $value_cookie;
        }

        return $output;
    }
}
