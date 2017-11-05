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

  public function test_i_can_book_a_car()
  {

    $this->browse(function ($browser) {
      $browser->visit('ducky/public/login')
             ->type('email', 'coconutboy@gmail.com')
                ->type('password', 'coconut')
                ->press('Login')
                ->assertPathIs('/ducky/public/home');
    });

    $this->browse(function ($browser) {
      $browser->visit('ducky/public/booking/create')
      ->select('transaction_id')
      ->type('name', 'TestGuy')
      ->type('email', 'testguy@gmail.com')
      ->type('mobile', '0435917263')
      ->keys('#start_date', '09092017') // omit the dashes
      ->keys('#end_date', '10102017') // omit the dashes
      ->type('address', '123 La Trobe St')
      ->press('.submit')
      ->assertSee('Thank You');
    });
  }

  public function test_booking_is_added_to_database()
  {
    $this->assertDatabaseHas('car_bookings', [
        'name' => 'TestGuy',
        'email' => 'testguy@gmail.com'
    ]);
  }

}
