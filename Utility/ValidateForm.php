<?php

function validateForm(Form $form){
    if(trim($form->name) == ""){
        throw new ValidateFormException("Nama harap di isi");
    }else if(trim($form->email) == ""){
        throw new ValidateFormException("Email harap di isi");
    }else if(trim($form->address) == ""){
        throw new ValidateFormException("Address harap di isi");
    }else if(trim($form->content) == ""){
        throw new ValidateFormException("Content harap di isi");
    }
}