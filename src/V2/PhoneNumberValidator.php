<?php

namespace V2;

class PhoneNumberValidator
{
    /**
     * Returns true if given phone number is valid, false otherwise.
     *
     * @param $phoneNumber
     * @return bool
     */
    function validate($phoneNumber)
    {
        // Our test is failing! Let's fix it in V3.
        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}