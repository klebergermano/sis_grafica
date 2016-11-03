<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Flyers Controller
 *
 * @property \App\Model\Table\FlyersTable $Flyers
 */
class FlyersController extends AppController
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
        $flyers = $this->paginate($this->Flyers);

        $this->set(compact('flyers'));
        $this->set('_serialize', ['flyers']);
    }

    /**
     * View method
     *
     * @param string|null $id Flyer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flyer = $this->Flyers->get($id, [
            'contain' => []
        ]);

        $this->set('flyer', $flyer);
        $this->set('_serialize', ['flyer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flyer = $this->Flyers->newEntity();
        if ($this->request->is('post')) {
            $flyer = $this->Flyers->patchEntity($flyer, $this->request->data);
            
               //////////////////////
            
            $filename = $this->UploadImgProduto->send($flyer, 'flyers');
            $flyer->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Flyers->save($flyer)) {
                $this->Flash->success(__('Flyer salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Flyer não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('flyer'));
        $this->set('_serialize', ['flyer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flyer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flyer = $this->Flyers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flyer = $this->Flyers->patchEntity($flyer, $this->request->data);
            
            
           //////////////////////
            
            $filename = $this->UploadImgProduto->send($flyer, 'flyers');
            $flyer->img_produto = $filename;
                  
            /////////////////////  
             
            
            if ($this->Flyers->save($flyer)) {
                $this->Flash->success(__('Flyer salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Flyer não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('flyer'));
        $this->set('_serialize', ['flyer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flyer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flyer = $this->Flyers->get($id);
        if ($this->Flyers->delete($flyer)) {
            $this->Flash->success(__('Flyer deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Flyer não pode ser deletado. Por favor, tente novamente.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }
}
