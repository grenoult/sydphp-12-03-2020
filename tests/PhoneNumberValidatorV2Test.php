<?php

namespace V2;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorV2Test extends TestCase
{
    public function testValidate()
    {
        $validator = new \V2\PhoneNumberValidator();
        $result = $validator->validate('0469 853 621');
        $this->assertTrue($result); // Our test is failing! Let's fix it in V3.

        $result = $validator->validate('0469853621');
        $this->assertTrue($result);

        $result = $validator->validate('abc');
        $this->assertFalse($result);
    }
}