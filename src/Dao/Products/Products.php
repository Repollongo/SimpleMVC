<?php
namespace Dao\Products;

use Dao\Dao;
use Dao\Table;


class Products extends Table{

private const IMG_BASE_URL = '/SimpleMVC/public/imgs/';


private static function aplicarUrlImagen(array $productos): array
{
    foreach ($productos as &$prod) {
        if (!empty($prod['productImgUrl'])) {
            $prod['productImgUrl'] = self::IMG_BASE_URL . $prod['productImgUrl'];
        }
    }
    return $productos;
}
   public static function getNewProducts()
    {
        $sqlstr = "SELECT p.ProductoId AS productId,
                          p.ProductoNombre AS productName,
                          p.ProductoDescripcion AS productDescription,
                          p.ProductoPrecio AS productPrice,
                          p.ProductoImg AS productImgUrl,
                          'ACT' AS productStatus
                   FROM productos p
                   ORDER BY p.ProductoId DESC
                   LIMIT 3";
        return self::obtenerRegistros($sqlstr, []);
        return self::aplicarUrlImagen($productos);

    }

    public static function getFeaturedProducts()
    {
        $sqlstr = "SELECT p.ProductoId AS productId,
                          p.ProductoNombre AS productName,
                          p.ProductoDescripcion AS productDescription,
                          p.ProductoPrecio AS productPrice,
                          p.ProductoImg AS productImgUrl,
                          'ACT' AS productStatus
                   FROM productos p
                   INNER JOIN destacados d ON p.ProductoId = d.ProductoId
                   ORDER BY d.FechaDestacado DESC
                   LIMIT 3";
        return self::obtenerRegistros($sqlstr, []);
            return self::aplicarUrlImagen($productos);

    }

    public static function getDailyDeals()
    {
        $sqlstr = "SELECT p.ProductoId AS productId,
                          p.ProductoNombre AS productName,
                          p.ProductoDescripcion AS productDescription,
                          p.ProductoPrecio AS productPrice,
                          p.ProductoImg AS productImgUrl,
                          'ACT' AS productStatus
                   FROM productos p
                   INNER JOIN ofertas o ON p.ProductoId = o.ProductoId
                   WHERE CURDATE() BETWEEN o.FechaInicio AND o.FechaFin
                   ORDER BY o.FechaInicio DESC
                   LIMIT 3";
        return self::obtenerRegistros($sqlstr, []);
            return self::aplicarUrlImagen($productos);

    }
}