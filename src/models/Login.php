<?php

class Login extends Model{
    
    public function validate(){
        $errors = [];
        if (!$this->username) {
            $errors['username'] = 'Informe o nome de usuário';
        }

        if (!$this->password) {
            $errors['password'] = 'Campo obrigatório';
        }

        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }

    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['username' => $this->username]);
        if ($user) {
            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usuário ou senha inválidos');
    }
}