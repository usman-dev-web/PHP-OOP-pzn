<?php

require_once __DIR__ . "/../Class/LoginRequest.php";
require_once __DIR__ . "/../Exception/ValidationException.php";
require_once __DIR__ . "/../Utility/ValidationUtils.php";


$login = new LoginRequest();
$login->username = "usman";
$login->password = "usman";

ValidationUtils::validate($login);


class RegisterUser{
    public ?string $name, $address, $email;
}

$register = new RegisterUser();
$register->name = "usman";
$register->address = "Pandeglang";
$register->email = "usman@id";
ValidationUtils::validateReflection($register);