<?php

namespace App\Controllers;

use App\Models\CochesModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Coches extends BaseController
{

    public function index()
    {

        $model = model(CochesModel::class);

        //$data['news'] = $model->getCoches();

        $data = [
            'coches' => $model->getCoches(),
            'title' => 'Lista de Coches',
        ];

        //print_r($data);

        return view('templates/header', $data)
            . view('coches/index')
            . view('templates/footer');

    }

    public function show($id)
    {

        $model = model(CochesModel::class);

        $data = [
            'coches' => $model->getCoches($id),
            'title' => 'Coche Seleccionado',
        ];

        if (empty($data['coches'])) {

            throw new PageNotFoundException('No se existe un coche con id: ' . $id);

        }

        //print_r($data);

        return view('templates/header', $data)
            . view('coches/view')
            . view('templates/footer');

    }

    public function nuevo() {

        helper('form'); // Asistente para funciones de formulario

        return view('templates/header', ['title' => 'Crear un nuevo coche'])
        . view('coches/crear')
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

}