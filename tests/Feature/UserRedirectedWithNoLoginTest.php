<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRedirectedWithNoLogin extends TestCase
{

    public function testUserIsRedirectedWithNoLogin()
    {
        $response = $this->get('/');
        $response->assertRedirect(route('login'));
    }
}
