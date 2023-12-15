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

            throw new PageNotFoundException('No se encuentra el coche: ' . $id);

        }

        //print_r($data);

        return view('templates/header', $data)
            . view('coches/view')
            . view('templates/footer');

    }

}