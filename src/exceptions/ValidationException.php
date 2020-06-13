<?php

class ValidationException extends AppException{

    private $errors = [];

    public function __construct($errors = [],
        $message = 'Não foi possível entrar no sistema',
        $code = 0, $previous = null){      

        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors(){
        return $this->errors;
    }

    public function get($att){
        return $this->errors[$att];
    }
}