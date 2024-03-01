<?php
namespace App\Libraries;


class Auth_lib {

    /**
     * Sebuah library untuk fungsi-fungsi normal yang reusable seputar Auth
     *
     * @var [type]
     */
    public $securityAuthPass;
    private $parapase, $chip;

    public function __construct() {
        $this->parapase = 'egl0821evergreen';
        $this->chip = 'AES-128-CBC';
    }

    public function textToHash($password) {
        $encrypt = openssl_encrypt($password, $this->chip, $this->parapase, 0 , $this->parapase);
        return $encrypt;
    }
    
    public function hashToText($hash){
        $decrypt = openssl_decrypt($hash, $this->chip, $this->parapase, 0 , $this->parapase);
        return $decrypt;
    }
}