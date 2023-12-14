<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController {

    public function index() {

        return view('welcome_message');

    }

    public function view($page = 'home') {  // $page = 'home' es un valor predeterminado para la función

        if (!(is_file(APPPATH . 'Views/pages/' . $page . '.php'))) {

            // Si la página (Vista) no existe, lanzar excepción
            throw new PageNotFoundException($page);

        }

        $data['title'] = ucfirst($page); // Primera letra mayúscula

        return view('templates/header', $data)  // Los datos pasados deben ser de tipo array, $data['title'] equivale a $title en la vista header
        . view('pages/' . $page)
        . view('templates/footer');

    }

}