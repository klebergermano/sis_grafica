<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Cardapios Controller
 *
 * @property \App\Model\Table\CardapiosTable $Cardapios
 */
class CardapiosController extends AppController
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
        $cardapios = $this->paginate($this->Cardapios);

        $this->set(compact('cardapios'));
        $this->set('_serialize', ['cardapios']);
    }

    /**
     * View method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardapio = $this->Cardapios->get($id, [
            'contain' => []
        ]);

        $this->set('cardapio', $cardapio);
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardapio = $this->Cardapios->newEntity();
        if ($this->request->is('post')) {
            $cardapio = $this->Cardapios->patchEntity($cardapio, $this->request->data);
                   
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($cardapio, 'cardapios');
            $cardapio->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Cardapios->save($cardapio)) {
                $this->Flash->success(__('Cardápio salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Cardápio não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cardapio'));
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardapio = $this->Cardapios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardapio = $this->Cardapios->patchEntity($cardapio, $this->request->data);
            
                   //////////////////////
            
            $filename = $this->UploadImgProduto->send($cardapio, 'cardapios');
            $cardapio->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Cardapios->save($cardapio)) {
                $this->Flash->success(__('Cardápio salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Cardápio não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cardapio'));
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardapio = $this->Cardapios->get($id);
        if ($this->Cardapios->delete($cardapio)) {
            $this->Flash->success(__('Cardápio deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Cardápio não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
