<?php

namespace V3;

class PhoneNumberValidator
{
    function validate($phoneNumber)
    {
        // Let's fix issue of V2: we remove spaces for validation.
        $phoneNumber = str_replace(' ', '', $phoneNumber);

        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}