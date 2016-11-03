<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Utility\Text;
use Cake\Network\Exception\InternalErrorException;
use Cake\ORM\TableRegistry;

class UploadComponent extends Component{
    
        public $max_files = 300;

    //5660-7198 marcia banco  

    public  function send($data, $table){
        
        if(!empty($data)){

        
        if(isset($data->id)){
            $lastId = $data->id;
        }else{
                $getTable = TableRegistry::get($table);
                $field = $getTable->find('all', ['fields'=>'id'])->last();
                $lastId = $field->id + 1;
        }
               $file = $this->request->data['filename'];
                
              foreach($file as $file){
                
                //$filename = $file['name'];
               
                $filename = $file['name'];

                $file_tmp_name = $file['tmp_name'];
                $dir = WWW_ROOT.'img'.DS.'uploads';
                $allowed = array('png', 'jpg', 'jpeg');
               $extenction = substr( strrchr($filename, '.'), 1);
                
                if(!in_array($extenction, $allowed)){
                    
                    throw new InternalErrorException("Error Processing Request", 1);
                }elseif( is_uploaded_file($file_tmp_name)){
                    
                $filename = 'arquivos'.'-'.$lastId.'.'.$extenction;
 
                    //$filename = /*Text::uuid().'-'.*/$filename;
                 
                    move_uploaded_file($file_tmp_name, $dir.DS.$filename);
                }

            }

        return $filename;
    }   
    
    }
    
    
    

    
    
    
    /////////////////////////////////////////////////////////////////////////////////////
    
            //public $max_files = 300;


    public function sendxxxx($data){

        
        if(!empty($data)){
            
            if(count($data) > $this->max_files){
                
                throw new InternalErrorException("Error Processing data max files {$this->max_files} ", 1);
          }
            
            foreach($data as $file){
                
                $filename = $file['name'];
                $file_tmp_name = $file['tmp_name'];
                $dir = WWW_ROOT.'img'.DS.'uploads';
                $allowed = array('png', 'jpg', 'jpeg');
               
                
                if(!in_array(substr( strrchr($filename, '.'), 1), $allowed)){
                    
                    throw new InternalErrorException("Error Processing Request", 1);
                }elseif( is_uploaded_file($file_tmp_name)){
                    
                    $filename = /*Text::uuid().'-'.*/$filename;
                    /*
                    $filedb = TableRegistry::get('Arquivos');
                    
                    $entity = $filedb->newEntity();
                    $entity->filename = $filename; 
                    $entity->description = $description; 

                    
                    
                    $filedb->save($entity);
                    */
                    
                    move_uploaded_file($file_tmp_name, $dir.DS.$filename);
                }

            }
            
            
        }
        
    }
    
    
} 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

