<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationLinkTest extends TestCase {

public function testRegistrationLink() {
    # $this->visit('/public')
         # ->click('Register')
         # ->seePageIs('/register');
         #
    $response = $this->get('/register');
    $response->assertStatus(200);
}
}

