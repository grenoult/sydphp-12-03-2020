<?php

namespace V3;

use PHPUnit\Framework\TestCase;

class PhoneNumberValidatorV3Test extends TestCase
{
    /**
     * @dataProvider validateDate
     */
    public function testValidate($input, $expectedOutput)
    {
        $validator = new \V3\PhoneNumberValidator();

        $result = $validator->validate($input);
        $this->assertSame($expectedOutput, $result);
    }

    public function validateDate()
    {
        return [
            'Test phone number with spaces' => [
                '0469 853 621', // Input
                true // Expected output
            ],
            'Test phone number without spaces' => [
                '0469853621', // Input
                true // Expected output
            ],
            'Test invalid phone number (string)' => [
                'abc', // Input
                false // Expected output
            ],
//            'Test international phone number' => [
//                '+61469 853 621', // Input
//                true // Expected output
//            ],
        ];
    }
}