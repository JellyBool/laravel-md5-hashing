<?php
namespace JellyBool\Hashing\Test;

use JellyBool\Hashing\Facades\Hash;
use Auth;

/**
 * Class HashTest
 *
 * @package JellyBool\Hashing\Test
 */
class HashTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test a hash string with Hash equals it's md5 hash
     *
     * @return void
     */
    public function testHashEquels()
    {
        $hash = Hash::make('password');

        $this->assertEquals($hash,md5('password'));
    }

    /**
     * Test a user hash password equls it's md5 hash
     */
    public function testAuthPassword()
    {
        $user = \App\User::create([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('password')
        ]);

        $this->assertEquals($user->password,md5('password'));
    }

    /**
     * Test a user if he can login with Auth::attempt
     */
    public function testAuthLogin()
    {
        $attempt = Auth::attempt([
            'email' => 'john@example.com',
            'password' => 'password'
        ]);
        $this->assertTrue($attempt);
    }

}