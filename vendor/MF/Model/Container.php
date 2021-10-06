<?php

namespace MF\Model;

use App\Connection;

class Container
{
    public static function getModel($model)
    {
        // instância de conexão
        $conn = Connection::getDb();

        $class = "\\App\\Models\\" . ucfirst($model);

        return new $class($conn);

        //retornar o modelo solicitado já instanciado, inclusive com a conexão já estabelecida
    }
}
