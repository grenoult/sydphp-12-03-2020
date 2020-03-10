<?php

namespace V1;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorTest extends TestCase
{
    public function testValidate()
    {
        $validator = new PhoneNumberValidatorV2();
        $result = $validator->validate('0469853621');
        $this->assertTrue($result);

        $result = $validator->validate('abc');
        $this->assertFalse($result);
    }
}