<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Taloes Controller
 *
 * @property \App\Model\Table\TaloesTable $Taloes
 */
class TaloesController extends AppController
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
        $taloes = $this->paginate($this->Taloes);

        $this->set(compact('taloes'));
        $this->set('_serialize', ['taloes']);
    }

    /**
     * View method
     *
     * @param string|null $id Talo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $talao = $this->Taloes->get($id, [
            'contain' => []
        ]);

        $this->set('talao', $talao);
        $this->set('_serialize', ['talo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $talao = $this->Taloes->newEntity();
        if ($this->request->is('post')) {
            $talao = $this->Taloes->patchEntity($talao, $this->request->data);
            
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($talao, 'talao');
            $talao->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Taloes->save($talao)) {
                $this->Flash->success(__('Talão salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Talão não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('talao'));
        $this->set('_serialize', ['talao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Talo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $talao = $this->Taloes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $talao = $this->Taloes->patchEntity($talao, $this->request->data);
            
           
            //////////////////////
            
            $filename = $this->UploadImgProduto->send($talao, 'talao');
            $talao->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Taloes->save($talo)) {
                $this->Flash->success(__('Talão salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Talão não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('talao'));
        $this->set('_serialize', ['talao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Talo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $talao = $this->Taloes->get($id);
        if ($this->Taloes->delete($talao)) {
            $this->Flash->success(__('Talão deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Talão não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
