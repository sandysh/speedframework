<?php

class Bcrypt
{

    private $rounds;

    public function __construct($rounds = 12)
    {
        if (CRYPT_BLOWFISH != 1) {
            throw new Exception("bcrypt not supported in this installation. See http://php.net/crypt");
        }

        $this->rounds = $rounds;
    }

    public function hash($input)
    {
        $hash = crypt($input, $this->getSalt());

        if (strlen($hash) > 13)
            return $hash;

        return false;
    }

    public function verify($input, $existingHash)
    {
        $hash = crypt($input, $existingHash);

        return $hash === $existingHash;
    }

    private function getSalt()
    {
        $salt = sprintf('$2a$%02d$', $this->rounds);

        $bytes = $this->getRandomBytes(16);

        $salt .= $this->encodeBytes($bytes);

        return $salt;
    }

}

?>