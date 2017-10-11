<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationTest extends DuskTestCase
{
    /**
     * Testing Registration Forms
     *
     * @return void
     */
    public function test_i_can_create_an_account()
    {
        $this->browse(function ($browser) {
            $browser->visit('ducky/public/register')
                ->type('name', 'me')
                ->type('email', 'test@outlook.com')
                ->type('password', 'secret')
                ->type('password_confirmation', 'secret')
                ->press('Register')
                //->see('register')
                //->seeInDatabase('users', ['email' => 'someone@outlook.com']);
        });
    }

    $this->assertDatabaseHas('users', [
        'email' => 'sally@example.com'
    ]);


}

