<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models;
use App\Models\Produto;

class IndexController extends Action
{

    public function index()
    {
        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        // instância de conexão
        $conn = Connection::getDb();

        //Instanciar modelo
        $produto = new Produto($conn);

        $this->view->dados = $produto->getProdutos();



        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {
        //$this->view->dados = array('Notebook', 'Calular', 'Banana');
        $this->render('sobreNos', 'layout1');
    }
}

?>

<!-- teste -->