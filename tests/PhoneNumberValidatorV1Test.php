<?php

namespace V1;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorTest extends TestCase
{
    public function testValidate()
    {
        $validator = new PhoneNumberValidator();
        $result = $validator->validate('0469853621');
        $this->assertTrue($result);

        $result = $validator->validate('abc');
        $this->assertFalse($result);
    }
}