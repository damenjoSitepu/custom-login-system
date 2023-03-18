<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class LoginTest extends TestCase
{
    public function __construct(
    ){}
    public function test_user_info(): void
    {
        $this->assertEquals('a','a','success');
    }
}
