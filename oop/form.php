<?php
interface Validations
{
    public function verifyEmail($email);
    public function confirmPassword($password);
}
class Registration implements Validations
{

    function verifyEmail($email)
    {
        return true;
    }
    function confirmPassword($password)
    {
        return true;
    }
    public function getValues($email, $password)
    {
        if ($this->verifyEmail($email) && $this->confirmPassword($password)) {
            # code...
        } else {
            # code...
        }
    }
}

$registration = new Registration();
$email = "";
$password = "";
$registration->getValues($email, $password);
