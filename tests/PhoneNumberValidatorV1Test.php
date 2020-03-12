<?php


use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorV1Test extends TestCase
{
    public function testValidate()
    {
        $validator = new \V1\PhoneNumberValidator();
        $result = $validator->validate('0469853621');
        $this->assertTrue($result);

        $result = $validator->validate('abc');
        $this->assertFalse($result);
    }
}