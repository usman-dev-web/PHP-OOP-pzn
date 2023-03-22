<?php

require_once __DIR__ . "/../Class/Form.php";
require_once __DIR__ . "/../Exception/ValidateFormException.php";
require_once __DIR__ . "/../Utility/ValidateForm.php";

// $form = new Form();
// $form->name = "Usman";
// $form->email = "Usman";
// $form->address = "Usman";
// $form->content = "Usman";
// validateForm($form);

// try catch
$tc = new Form();
$tc->name = "";
$tc->email = "";
$tc->address = "";
$tc->content = "";
try{
    validateForm($tc);
}catch(ValidateFormException $exception){
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}finally{
    echo "Terima kasih" . PHP_EOL;
}