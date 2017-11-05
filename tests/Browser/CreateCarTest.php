<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateCarTest extends DuskTestCase
{
    /**
     * Testing Booking Forms
     *
     * @return void
     */
    public function test_i_can_create_car()
    {
        $this->browse(function ($browser) {
            $browser->visit('ducky/public/car/create')
                ->type('name', 'TestCar')
                ->type('model', 'Honda Civic')
                ->type('price', '75')
                ->press('.submit')
                ->assertSee('Car added successfully');
        });
    }

    public function test_car_is_created_in_database()
    {
      $this->assertDatabaseHas('cars', [
          'name' => 'TestCar'
      ]);
    }
}
