<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuzzleController extends Controller
{
    private $side_menus = [];
    private $view_params = [];

    public function __construct(){
        $this->side_menus = [
            'name' => 'ナンプレ'
        ];

        $this->view_params += [
            'side_menus' => $this->side_menus
        ] ;

    }
}
