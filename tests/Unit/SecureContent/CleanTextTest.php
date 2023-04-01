<?php

namespace tests\Unit\SecureContent;

use App\SecureContent\CleanText;
use PHPUnit\Framework\TestCase;

class CleanTextTest extends TestCase
{
    private CleanText $clean;
    private string $value;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clean = new CleanText();
        $this->value = "asd123/=(";
    }

    public function testCleanText_Success():void
    {
        $result = $this->clean->cleanText($this->value);
        $expected = "asd123";

        $this->assertEquals($expected, $result);
    }

    public function testCleanText_Failure():void
    {
        $result = $this->clean->cleanText($this->value);
        $expected = "asd123/=";

        $this->assertNotEquals($expected, $result);
    }

//    public function testCleantext_inputIsArray_Failure():void
//    {
//        $clean = new cleanText();
//        $value = [];
//        $result = $clean->cleanText($value);
//
//        $this->assertEquals([], $result);
//
//    }

//    protected function tearDown(): void
//    {
//        parent::tearDown();
//    }

}