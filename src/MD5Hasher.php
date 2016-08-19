<?php
namespace JellyBool\Hashing;

use Illuminate\Contracts\Hashing\Hasher;

/**
 * Class MD5Hasher
 *
 * @package JellyBool\Hashing
 */
class MD5Hasher implements Hasher
{

    /**
     * @param string $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    /**
     * @param string $value
     * @param string $hashedValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        if (strlen($hashedValue) === 0) {
            return false;
        }
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashedValue;
    }

    /**
     * @param string $hashedValue
     * @param array $options
     * @return string
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return $hashedValue;
    }
}