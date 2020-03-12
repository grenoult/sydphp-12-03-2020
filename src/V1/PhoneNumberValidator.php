<?php

namespace V1;

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
        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}
