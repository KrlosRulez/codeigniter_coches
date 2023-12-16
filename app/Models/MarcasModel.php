<?php

namespace App\Models;

use CodeIgniter\Model;

class MarcasModel extends Model
{

    protected $table = 'marcas';    // Tabla para trabajar
    protected $primaryKey = 'id';
    protected $allowedFields = ['marca'];    // Datos actualizables de la tabla

    public function getMarcas($id = false)
    {  // Por defeto el slug es false

        if ($id === false) {  // Si se llama a getCoches sin slug, se obtendrán todos los coches ya que el slug por defecto es false

            $sql = $this->orderBy('marcas.id');
            $sql = $this->findAll();

        } else {    // Si no se obtendrá el coche por su slug

            $sql = $this->where(['marcas.id' => $id]);
            $sql = $this->first();

        }

        return $sql;

    }

}