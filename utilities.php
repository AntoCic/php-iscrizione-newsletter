<?php
function isCorrectEmail($email)
{
    if (preg_match("/@\w+\./", $email)) {
        return true;
    }
    return false;
}