<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_has_name()
    {
        $user = User::factory()->make([
            'name' => 'Prasit Gebsaap',
            'email' => 'test@test.com'
        ]);

        $this->assertEquals('Prasit Gebsaap', $user->name);
    }
}

