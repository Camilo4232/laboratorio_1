<?php

class Usuario {
    private $usuarios = array(
        'usuario1' => 'contraseña1',
        'usuario2' => 'contraseña2'
    );

    /**
     * @param string $usuario 
     * @param string $password 
     * @return bool 
     */
    public function validarCredenciales($usuario, $password) {
        if (array_key_exists($usuario, $this->usuarios)) {
            if ($this->usuarios[$usuario] === $password) {
                return true; 
            }
        }
        return false; 
    }
}
