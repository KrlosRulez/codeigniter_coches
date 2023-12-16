<?php

namespace App\Controllers;

use App\Models\CochesModel;
use App\Models\MarcasModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Coches extends BaseController
{

    public function index()
    {

        $model = model(CochesModel::class);

        $data = [
            'coches' => $model->getCoches(),    // cada posición del array "coches" será un array con los parámetros de cada coche
            'title' => 'Lista de Coches',
        ];

        return view('templates/header', $data)
            . view('coches/index')
            . view('templates/footer');

    }

    public function show($id)
    {

        $model = model(CochesModel::class);

        $data = [
            'coches' => $model->getCoches($id), // Cada posicición del array "coches" será un parámetro del coche elegido
            'title' => 'Coche Seleccionado',
        ];

        if (empty($data['coches'])) {

            throw new PageNotFoundException('No existe un coche con id: ' . $id);

        }

        return view('templates/header', $data)
            . view('coches/view')
            . view('templates/footer');

    }

    public function nuevo() {

        helper('form'); // Asistente para funciones de formulario

        $model = model(MarcasModel::class);

        $data['marca'] = $model->findAll();

        return view('templates/header', ['title' => 'Crear un nuevo coche'])
        . view('coches/crear', $data)
        . view('templates/footer');

    }

    public function crear() {

       helper('form');
       
       // Validar los datos introducidos

       if (! $this->validate([
        'modelo' => 'required',
        'precio' => 'required|max_length[6]',
        'id_marca' => 'required',
       ])) {

            // Si la validación falla, se devuelve el formulario
            return $this->nuevo();

       } else {

            // Guardar los datos validados
            $post = $this->validator->getValidated();

            $model = model(CochesModel::class);

            $model->save([
                'modelo' => $post['modelo'],
                'precio' => $post['precio'],
                'id_marca' => $post['id_marca']
            ]);

            return view('templates/header', ['title' => 'Coche Creado'])
            . view('coches/success_create')
            . view('templates/footer');

       }

    }

    public function delete($id) {

        if ($id == null) {

            throw new PageNotFoundException('No se puede eliminar el coche');

        }

        $model = model(CochesModel::class);

        if ($model->getCoches($id)) {

            $model->delete($id);

        } else {

            throw new PageNotFoundException('El coche con id: "' . $id . '" no existe en la base de datos');

        }

        return view('templates/header', ['title' => 'Coche Eliminado'])
        . view('coches/success_delete')
        . view('templates/footer');

    }

    public function modificar($id) {

        helper('form');

        if ($id == null) {

            throw new PageNotFoundException('No se puede actualizar el coche');

        }

        $model = model(CochesModel::class);

        $modelMarca = model(MarcasModel::class);

        if ($model->where('id', $id)->find()) {

            $data = [
                'title' => 'Modificar Coche',
                'coches' => $model->getCoches($id),
                'marca' => $modelMarca->findAll(),
            ];

        } else {

            throw new PageNotFoundException('El coche con id: "' . $id . '" no existe en la base de datos');

        }

        return view('templates/header', $data)
        . view('coches/update')
        . view('templates/footer');

    }

    public function modificado($id) {

        helper('form');
       
        // Validar los datos introducidos
 
        if (! $this->validate([
         'modelo' => 'required',
         'precio' => 'required|max_length[6]',
         'id_marca' => 'required',
        ])) {
 
             // Si la validación falla, se devuelve el formulario
             return $this->modificar($id);
 
        } else {
 
             // Guardar los datos validados
             $post = $this->validator->getValidated();
 
             $model = model(CochesModel::class);
 
             $model->save([
                 'id' => $id,
                 'modelo' => $post['modelo'],
                 'precio' => $post['precio'],
                 'id_marca' => $post['id_marca']
             ]);
 
             return view('templates/header', ['title' => 'Coche Modificado'])
             . view('coches/success_update')
             . view('templates/footer');
 
        }

    }

}