<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * FolhinhasParede Controller
 *
 * @property \App\Model\Table\FolhinhasParedeTable $FolhinhasParede
 */
class FolhinhasParedeController extends AppController
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
        $folhinhasParede = $this->paginate($this->FolhinhasParede);

        $this->set(compact('folhinhasParede'));
        $this->set('_serialize', ['folhinhasParede']);
    }

    /**
     * View method
     *
     * @param string|null $id Folhinhas Parede id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $folhinhasParede = $this->FolhinhasParede->get($id, [
            'contain' => []
        ]);

        $this->set('folhinhasParede', $folhinhasParede);
        $this->set('_serialize', ['folhinhasParede']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $folhinhasParede = $this->FolhinhasParede->newEntity();
        if ($this->request->is('post')) {
            $folhinhasParede = $this->FolhinhasParede->patchEntity($folhinhasParede, $this->request->data);
            
            //////////////////////
            
            $filename = $this->UploadImgProduto->send($folhinhasParede, 'folhinhas_parede');
            $folhinhasParede->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->FolhinhasParede->save($folhinhasParede)) {
                $this->Flash->success(__('Folhinha salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A Folhinha não pode ser salva. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('folhinhasParede'));
        $this->set('_serialize', ['folhinhasParede']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Folhinhas Parede id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $folhinhasParede = $this->FolhinhasParede->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $folhinhasParede = $this->FolhinhasParede->patchEntity($folhinhasParede, $this->request->data);
            
            //////////////////////
            
            $filename = $this->UploadImgProduto->send($folhinhasParede, 'folhinhas_parede');
            $folhinhasParede->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->FolhinhasParede->save($folhinhasParede)) {
                $this->Flash->success(__('Folhinha salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A Folhinha não pode ser salva. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('folhinhasParede'));
        $this->set('_serialize', ['folhinhasParede']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Folhinhas Parede id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $folhinhasParede = $this->FolhinhasParede->get($id);
        if ($this->FolhinhasParede->delete($folhinhasParede)) {
            $this->Flash->success(__('Folhinha salva com sucesso.'));
        } else {
            $this->Flash->error(__('A Folhinha não pode ser deletada. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
