<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BookingTest extends DuskTestCase
{
    /**
     * Testing Booking Forms
     *
     * @return void
     */
    public function testBookingCar()
    {
        $this->browse(function ($browser) {
            $browser->visit('ducky/public/booking/create')
                ->select('item_id')
                ->type('name', 'TestGuy')
                ->type('email', 'testguy@gmail.com')
                ->type('address_line_1', '123')
                ->type('address_line_2', 'La Trobe St')
                ->type('suburb', 'CBD')
                ->type('state', 'Victoria')
                ->type('country', 'Australia')
                ->press('.submit')
                ->assertSee('Thank You');
        });
    }
}
