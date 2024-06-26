<?php

namespace App\Helpers;

class FormatPhoneNumber
{

    public static function formatPhoneNumber(string $phoneNumber)
    {
        $phoneNumber = trim($phoneNumber);

        if (preg_match('/[a-zA-Z]/', $phoneNumber)) {
            return false;
        }
        $length = strlen($phoneNumber);

        if (substr($phoneNumber, 0, 1) === '0') {
            if ($length === 10) {
                $phoneNumber = '233' . substr($phoneNumber, 1);
            } else {
                return false;
            }
        } elseif (substr($phoneNumber, 0, 3) === '233') {
            //* If the number starts with '233', ensure it's 12 digits
            if ($length !== 12) {
                return false;
            }
        } elseif (substr($phoneNumber, 0, 4) === '+233') {
            //* If the number starts with '+233', ensure it's 13 digits
            if ($length !== 13) {
                return false;
            }
            $phoneNumber = '233' . substr($phoneNumber, 4);
        } else {
            return false;
        }

        return $phoneNumber;
    }
}
