<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Utility\Text;
use Cake\Network\Exception\InternalErrorException;
use Cake\ORM\TableRegistry;

class UploadImgProdutoComponent extends Component{
    
   
  public $components = array('SetUri');
    
    public  function send($data, $table){
        
        foreach(($this->request->data['img_produto'])as $file_img){ }
        
             if(!empty($file_img['name'])){

                 

        
        if(isset($data->id)){
            $lastId = $data->id;
        }else{
                $getTable = TableRegistry::get($table);
                $field = $getTable->find('all', ['fields'=>'id'])->last();
                $lastId = $field->id + 1;
        }
          
            
              switch($table){
                  
                case "adesivos" : $img_name = ($data->nome.'-'.$lastId.'-'. $data->gramatura . '-' . $data->cores . '-' . $data->material . '-' . $data->tamanho . '-' . $data->corte);
                    break;

                case 'banners' : $img_name = ($data->nome.'-' .$lastId.'-'. $data->tamanho . '-' . $data->material . '-' . $data->gramatura . '-' . $data->acabamento);
                    break;

                case "cardapios" : $img_name = ($data->nome.'-' .$lastId.'-'. $data->gramatura . '-' . $data->cores . '-' . $data->material . '-' . $data->tamanho . '-' . $data->corte);
                    break;
            
                case 'cartazes' : $img_name = ($data->nome.'-' .$lastId.'-'. $data->gramatura . '-' . $data->cores . '-' . $data->material . '-' . $data->tamanho . '-' . $data->acabamento);
                    break;
                
                case 'cartoes' : $img_name = ($data->nome.'-' .$lastId.'-'. $data->gramatura . '-' . $data->cores . '-' . $data->material . '-' . $data->corte . '-' . $data->acabamento);
                    break;


               
                
                default: $img_name = $data->nome.'-'.$lastId.'-' . $data->gramatura . '-' . $data->acabamento;
            } 
                echo $complemento = $this->SetUri->uri($complemento);
        
               $file = $this->request->data['img_produto'];
                
              foreach($file as $file){
                
                //$filename = $file['name'];
               
                $filename = $file['name'];
                $file_tmp_name = $file['tmp_name'];
                $dir = WWW_ROOT.'img'.DS.'produtos';
                $allowed = array('png', 'jpg', 'jpeg');
               $extenction = substr( strrchr($filename, '.'), 1);
                
                if(!in_array($extenction, $allowed)){
                    
                    throw new InternalErrorException("Error Processing Request", 1);
                }elseif( is_uploaded_file($file_tmp_name)){
                    
                $filename = $img_name.'.'.$extenction;
 
                    //$filename = /*Text::uuid().'-'.*/$filename;
                 
                    move_uploaded_file($file_tmp_name, $dir.DS.$filename);
                }

            }
        return $filename;
    }  else{
        
       
        
        $getTable = TableRegistry::get($table)->get($data->id);
               
        return $getTable->img_produto;
             
       
        
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

