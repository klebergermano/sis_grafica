<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Imas Controller
 *
 * @property \App\Model\Table\ImasTable $Imas
 */
class ImasController extends AppController
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
        $imas = $this->paginate($this->Imas);

        $this->set(compact('imas'));
        $this->set('_serialize', ['imas']);
    }

    /**
     * View method
     *
     * @param string|null $id Ima id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ima = $this->Imas->get($id, [
            'contain' => []
        ]);

        $this->set('ima', $ima);
        $this->set('_serialize', ['ima']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ima = $this->Imas->newEntity();
        if ($this->request->is('post')) {
            $ima = $this->Imas->patchEntity($ima, $this->request->data);
            
               //////////////////////
            
            $filename = $this->UploadImgProduto->send($ima, 'imas');
            $ima->img_produto = $filename;
                  
            /////////////////////  
            
            
            if ($this->Imas->save($ima)) {
                $this->Flash->success(__('Imã salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Imã não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('ima'));
        $this->set('_serialize', ['ima']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ima id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ima = $this->Imas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ima = $this->Imas->patchEntity($ima, $this->request->data);
            
            //////////////////////
            
            $filename = $this->UploadImgProduto->send($ima, 'imas');
            $ima->img_produto = $filename;
                  
            /////////////////////  
            
            
            if ($this->Imas->save($ima)) {
                $this->Flash->success(__('Imã salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Imã não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('ima'));
        $this->set('_serialize', ['ima']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ima id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ima = $this->Imas->get($id);
        if ($this->Imas->delete($ima)) {
            $this->Flash->success(__('Imã deletada com sucesso.'));
        } else {
            $this->Flash->error(__('O Imã não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
