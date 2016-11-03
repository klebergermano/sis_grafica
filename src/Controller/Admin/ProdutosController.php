<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use App\Controller\Admin\CategoriaProdutosController;

class ProdutosController extends AppController{
    
    public function index (){
        
        $categoria = new CategoriaProdutosController;
        $categoriaProdutos = $categoria->paginate($categoria->CategoriaProdutos);    
        $this->set(compact('categoriaProdutos'));
        $this->set('_serialize', ['categoriaProdutos']);

        
        
    }
    
}


