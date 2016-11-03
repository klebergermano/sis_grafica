<?php
namespace App\Controller\Component;
use Cake\ORM\TableRegistry;



class LastIdComponent extends Component{
 
        function getLastId($table){
        
        $tabela = TableRegistry::get($table);
        $campo = $tabela->find('all', ['fields'=>'id'])->last();
        
        return $lastId = $campo->id + 1;
                
        
        
    }
    
    
 }