<?php

namespace App\Models;

use CodeIgniter\Model;

class CochesModel extends Model
{

    protected $table = 'coches';    // Tabla para trabajar

    protected $allowedFields = ['modelo', 'precio', 'id_marca'];    // Datos actualizables de la tabla

    public function getCoches($id = false)
    {  // Por defeto el slug es false

        $sql = $this->select('coches.*, marcas.marca'); // No hacer marcas.* (al llamar a index.php después de pasar por el controlador Coches.php utiliza la última id (la de marcas))
        $sql = $this->join('marcas', 'coches.id_marca=marcas.id');

        if ($id === false) {  // Si se llama a getCoches sin slug, se obtendrán todos los coches ya que el slug por defecto es false

            $sql = $this->orderBy('coches.id');
            $sql = $this->findAll();

        } else {    // Si no se obtendrá el coche por su slug

            $sql = $this->where(['coches.id' => $id]);
            $sql = $this->first();

        }

        return $sql;

    }

}