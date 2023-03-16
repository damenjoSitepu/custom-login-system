<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerEnvTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testControllerEnv(): void
    {
        dd(config('controller.app_path'));
    }
}
