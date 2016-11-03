<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teste Controller
 *
 * @property \App\Model\Table\TesteTable $Teste
 */
class TesteController extends AppController
{
 /*variaveis para o UploadComponent*/
 
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Upload');
    }
    
    /*-------------------*/

    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $teste = $this->paginate($this->Teste);

        $this->set(compact('teste'));
        $this->set('_serialize', ['teste']);
    }

    /**
     * View method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teste = $this->Teste->get($id, [
            'contain' => []
        ]);

        $this->set('teste', $teste);
        $this->set('_serialize', ['teste']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
           if(!empty($this->request->data)){
            $this->Upload->send($this->request->data['teste']);
            
        }
        
        $teste = $this->Teste->newEntity();
        if ($this->request->is('post')) {
            $teste = $this->Teste->patchEntity($teste, $this->request->data);
            if ($this->Teste->save($teste)) {
                $this->Flash->success(__('The teste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The teste could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('teste'));
        $this->set('_serialize', ['teste']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        
        if(!empty($this->request->data)){
            $this->Upload->send($this->request->data['teste']);
            
        }
        
        
        $teste = $this->Teste->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teste = $this->Teste->patchEntity($teste, $this->request->data);
            if ($this->Teste->save($teste)) {
                $this->Flash->success(__('The teste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The teste could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('teste'));
        $this->set('_serialize', ['teste']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teste id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teste = $this->Teste->get($id);
        if ($this->Teste->delete($teste)) {
            $this->Flash->success(__('The teste has been deleted.'));
        } else {
            $this->Flash->error(__('The teste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
