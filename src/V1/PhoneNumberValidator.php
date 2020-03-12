<?php

namespace V1;

class PhoneNumberValidator
{
    function validate($phoneNumber)
    {
        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}
