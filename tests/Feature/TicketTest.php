<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_tickets_view(): void
    {
        $response = $this->get('/ticketeria');

        $response->assertStatus(200);
    }
}
