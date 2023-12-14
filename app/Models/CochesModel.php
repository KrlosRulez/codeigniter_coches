<?php

namespace App\Models;

use CodeIgniter\Model;

class CochesModel extends Model {

    protected $table = 'coches';    // Tabla para trabajar

    public function getCoches($slug = false) {  // Por defeto el slug es false

        if ($slug === false) {  // Si se llama a getCoches sin slug, se obtendrán todos los coches ya que el slug por defecto es false

            return $this->findAll();

        } else {    // Si no se obtendrá el coche por su slug

            return $this->where(['slug' => $slug])->first();

        }

    }

}