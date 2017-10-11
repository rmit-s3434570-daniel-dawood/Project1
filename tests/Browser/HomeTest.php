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
    public function testCreateCarLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('ducky/public/car/create')
                   ->assertSee('Add New Car');
        });
    }

    public function testBookingLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('ducky/public/booking/create')
                   ->assertSee('Book a Ducky');
        });
    }
}
