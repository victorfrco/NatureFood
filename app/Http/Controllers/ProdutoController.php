<?php
/**
 * Created by PhpStorm.
 * User: victor.oliveira
 * Date: 17/07/2017
 * Time: 15:44
 */

namespace app\Http\Controllers;
use Nature\Http\Controllers\Controller;

class ProdutoController extends Controller{

    public function lista(){
        return '<h1>Listagem de produtos com Laravel</h1>';
    }
}