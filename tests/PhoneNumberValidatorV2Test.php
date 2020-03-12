<?php

namespace V2;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorTest extends TestCase
{
    public function testValidate()
    {
        $validator = new PhoneNumberValidator();
        $result = $validator->validate('0469 853 621');
        $this->assertTrue($result);

        $result = $validator->validate('0469853621');
        $this->assertTrue($result);

        $result = $validator->validate('abc');
        $this->assertFalse($result);
    }
}