<?php

namespace V3;

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
        // Let's fix issue of V2: we remove spaces for validation.
        $phoneNumber = str_replace(' ', '', $phoneNumber);

        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}