<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Cartazes Controller
 *
 * @property \App\Model\Table\CartazesTable $Cartazes
 */
class CartazesController extends AppController
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
        $cartazes = $this->paginate($this->Cartazes);

        $this->set(compact('cartazes'));
        $this->set('_serialize', ['cartazes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cartaze id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cartaze = $this->Cartazes->get($id, [
            'contain' => []
        ]);

        $this->set('cartaze', $cartaze);
        $this->set('_serialize', ['cartaze']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cartaze = $this->Cartazes->newEntity();
        if ($this->request->is('post')) {
            $cartaze = $this->Cartazes->patchEntity($cartaze, $this->request->data);
            
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($cartaze, 'cartazes');
            $cartaze->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Cartazes->save($cartaze)) {
                $this->Flash->success(__('Cartaz salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Cartaz não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cartaze'));
        $this->set('_serialize', ['cartaze']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cartaze id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cartaze = $this->Cartazes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cartaze = $this->Cartazes->patchEntity($cartaze, $this->request->data);
            
                        
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($cartaze, 'cartazes');
            $cartaze->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Cartazes->save($cartaze)) {
                $this->Flash->success(__('Cartaz salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Cartaz não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cartaze'));
        $this->set('_serialize', ['cartaze']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cartaze id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cartaze = $this->Cartazes->get($id);
        if ($this->Cartazes->delete($cartaze)) {
            $this->Flash->success(__('Cartaz deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Cartaz não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
