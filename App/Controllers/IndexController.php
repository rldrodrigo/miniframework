<?php

namespace App\Controllers;

// Recursos miniframework
use MF\Model\Container;
use MF\Controller\Action;

// Os Models
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action
{

    public function index()
    {
        $produto = Container::getModel('Produto');

        $this->view->dados = $produto->getProdutos();

        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {

        $info = Container::getModel('Info');

        $informacoes =  $info->getInfo();

        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout1');
    }
}

?>

<!-- teste -->