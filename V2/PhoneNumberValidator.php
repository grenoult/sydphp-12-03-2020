<?php

namespace V2;

class PhoneNumberValidator
{
    function validate($phoneNumber)
    {
        // Our test is failing! Let's fix it in V3.
        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}