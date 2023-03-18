<?php

namespace Tests\Feature;

use Tests\TestCase;

class TernaryTest extends TestCase
{
    public function test_user_with_empty_string(): void
    {
        $user = "" ?: "N/A";
        $this->assertEquals("N/A",$user,'Failed!');
    }

    public function test_user_with_null_value(): void 
    {
        $user = null ?: "N/A";
        $this->assertEquals("N/A",$user,'Failed!');
    }

    public function test_user_with_not_null_value(): void 
    {
        $user = "abc" ?: "N/A";
        $this->assertEquals("abc",$user,'Failed');
    }

    public function test_user_without_user_variable(): void 
    {
        $this->assertEquals("N/A",isset($juaraUser) ?: "N/A",'Failed!'); 
    }

    public function test_user_with_false_boolean_value(): void 
    {
        $user = false ?: "N/A";
        $this->assertEquals("N/A",$user,'Failed!');
    }
}
