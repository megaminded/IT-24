<?php
function checkNumericType($value)
{
    if (is_numeric($value)) {
        return true;
    } else {
        return false;
    }
}
function getStringLength($value)
{
    return strlen($value);
}
