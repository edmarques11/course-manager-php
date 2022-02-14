<?php

switch($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        require 'listar-cursos.php';
        break;
    case '/novo-curso':
        require 'formulario-novo-curso';
        break;
    default:
        require 'error.php';
        break;
}