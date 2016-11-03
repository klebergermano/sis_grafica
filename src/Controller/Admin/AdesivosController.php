<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Adesivos Controller
 *
 * @property \App\Model\Table\AdesivosTable $Adesivos
 */
class AdesivosController extends AppController
{
    
    
         public function initialize() {
        parent::initialize();
                $this->loadComponent('UploadImgProduto');

       // $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $adesivos = $this->paginate($this->Adesivos);

        $this->set(compact('adesivos'));
        $this->set('_serialize', ['adesivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Adesivo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adesivo = $this->Adesivos->get($id, [
            'contain' => []
        ]);

        $this->set('adesivo', $adesivo);
        $this->set('_serialize', ['adesivo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adesivo = $this->Adesivos->newEntity();
        if ($this->request->is('post')) {
            $adesivo = $this->Adesivos->patchEntity($adesivo, $this->request->data);
            
              //////////////////////
            
            $filename = $this->UploadImgProduto->send($adesivo, 'adesivos');
            $adesivo->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Adesivos->save($adesivo)) {
                $this->Flash->success(__('Adesivo salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Adesivo não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('adesivo'));
        $this->set('_serialize', ['adesivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adesivo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adesivo = $this->Adesivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adesivo = $this->Adesivos->patchEntity($adesivo, $this->request->data);
            
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($adesivo, 'adesivos');
            $adesivo->img_produto = $filename;
                  
            /////////////////////  
            
            
            if ($this->Adesivos->save($adesivo)) {
                $this->Flash->success(__('Adesivo salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Adesivo não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('adesivo'));
        $this->set('_serialize', ['adesivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adesivo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adesivo = $this->Adesivos->get($id);
        if ($this->Adesivos->delete($adesivo)) {
            $this->Flash->success(__('Adesivo deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Adesivo não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
