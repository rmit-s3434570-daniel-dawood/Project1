<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationLinkTest extends TestCase {

    public function testRegistrationLink() {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testLoginLink() {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testVehiclesLink() {
        $response = $this->get('/vehicles');
        $response->assertStatus(200);
    }

}

