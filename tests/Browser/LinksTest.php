<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LinksTesting extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function test_i_can_access_create_car_link()
    {

      $this->browse(function ($browser) {
        $browser->visit('ducky/public/login')
               ->type('email', 'coconutboy@gmail.com')
                  ->type('password', 'coconut')
                  ->press('Login')
                  ->assertPathIs('/ducky/public/home');
      });

        $this->browse(function (Browser $browser) {
            $browser->visit('ducky/public/car/create')
                   ->assertSee('Add New Car');
        });
    }

    public function test_i_can_access_booking_link()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('ducky/public/booking/create')
                   ->assertSee('Book a Ducky');
        });
    }
}
