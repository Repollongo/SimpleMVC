<?php

namespace Dao\Producto;

use Dao\Table;

class Productos extends Table
{
    public static function ObtenerProductos(): array
    {
        return[
            [
                "id" => 1,
                "nombre" => "Producto 1",
                "descripcion" => "Descripción del Producto 1",
                "precio" => 100.00,
                "estado" => "ACT",
                "stock" => 100
            ],
            [
                "id" => 2,
                "nombre" => "Producto 1",
                "descripcion" => "Descripción del Producto 2",
                "precio" => 100.00,
                "estado" => "ACT",
                "stock" => 100
            ],
            [
               "id" => 3,
                "nombre" => "Producto 1",
                "descripcion" => "Descripción del Producto 3",
                "precio" => 100.00,
                "estado" => "ACT",
                "stock" => 100
            ]
        ];
    }   
}