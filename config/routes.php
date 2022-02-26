<?php

use Alura\Cursos\Controller\{
    Exclusao,
    FormularioInsercao,
    ListarCursos,
    Persistencia,
    FormularioEdicao,
    FormularioLogin,
    RealizarLogin
};

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class
];
