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
                ->type('mobile', '0435917263')
                ->keys('#start_date', '09092017') // omit the dashes
                ->keys('#end_date', '10102017') // omit the dashes
                ->type('address_line_1', '123')
                ->type('address_line_2', 'La Trobe St')
                ->press('.submit')
                ->assertSee('Thank You');
        });
    }
}
