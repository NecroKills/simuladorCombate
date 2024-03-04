<?php

require_once 'Cavaleiro.php';
require_once 'Piqueiro.php';
require_once 'Arqueiro.php';
require_once 'SimularCombate.php';
require_once 'Exercito.php';

$simulador = new SimularCombate();
$exercito1 = new Exercito();
$exercito2 = new Exercito();

$exercito1->setNome('Exercito Maycon');
$exercito1->adicionarUnidade(new Cavaleiro("Cavaleiro: necro 1"));
$exercito1->adicionarUnidade(new Piqueiro("Piqueiro: pincalido 1"));
$exercito1->adicionarUnidade(new Arqueiro("Arqueiro: urray 1"));

$exercito1->setNome('Exercito Dedei');
$exercito2->adicionarUnidade(new Cavaleiro("Cavaleiro: Thor 2"));
$exercito2->adicionarUnidade(new Piqueiro("Piqueiro: lancelot 2"));
$exercito2->adicionarUnidade(new Arqueiro("Arqueiro: legolas vesgo 2"));

$simulador->simularCombate($exercito1, $exercito2);
