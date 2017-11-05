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
                ->type('name', 'DuckyTester')
                ->type('email', 'duckytest@gmail.com')
                ->type('password', 'secret')
                ->type('password_confirmation', 'secret')
                ->press('Register');
                //->see('register')
                //->seeInDatabase('users', ['email' => 'someone@outlook.com']);
        });
    }

    public function test_account_is_in_database()
    {
      $this->assertDatabaseHas('users', [
          'email' => 'duckytest@gmail.com'
      ]);
    }

    // $this->assertDatabaseHas('users', [
    //     'email' => 'sally@example.com'
    // ]);


}
