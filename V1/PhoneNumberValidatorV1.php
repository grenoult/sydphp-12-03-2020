<?php

namespace V1;

class PhoneNumberValidatorV1
{
    function validate($phoneNumber)
    {
        return strlen($phoneNumber) == 10 && is_numeric($phoneNumber);
    }
}