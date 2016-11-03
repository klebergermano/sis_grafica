<?php
namespace App\Controller;
use App\Controller\AppController;

class AdminController extends AppController{
public function index(){
                    return $this->redirect(['controller'=>'/admin/painel', 'action' => 'index']);

}
}
