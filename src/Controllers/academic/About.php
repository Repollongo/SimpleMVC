<?php

namespace Controllers\Academic;
    
use Controllers\PublicController;

use Views\Renderer;
use Dao\Producto\Productos;
use Dao\Carros\Carros as CarrosDao;

 class About extends PublicController
 {
    private string $HolaMensaje;
     public function run() :void
     { 
        $productos = Productos::ObtenerProductos();
         $this->HolaMensaje = "Hola, soy un mensaje desde el controlador About";
         $carros = CarrosDao::obtenerCarros();
         Renderer::render("academic/about", [
            "mensaje" => $this->HolaMensaje,
            "productos" => $productos,
            "carros" => $carros,
         ]);
           
     }
       
}