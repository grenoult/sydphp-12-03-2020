<?php

namespace V1;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorV1Test extends TestCase
{
    public function testValidate()
    {
        $validator = new PhoneNumberValidatorV1();
        $result = $validator->validate('0469853621');

        $this->assertTrue($result);
    }
}