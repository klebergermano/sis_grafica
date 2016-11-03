<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\ORM\TableRegistry;
/**
 * Cartoes Controller
 *
 * @property \App\Model\Table\CartoesTable $Cartoes
 */
class CartoesController extends AppController
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
        $cartoes = $this->paginate($this->Cartoes);

        $this->set(compact('cartoes'));
        $this->set('_serialize', ['cartoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Carto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carto = $this->Cartoes->get($id, [
            'contain' => []
        ]);

        $this->set('carto', $carto);
        $this->set('_serialize', ['carto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carto = $this->Cartoes->newEntity();
        if ($this->request->is('post')) {
            $carto = $this->Cartoes->patchEntity($carto, $this->request->data);
            
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($carto, 'cartoes');
            $carto->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Cartoes->save($carto)) {
                $this->Flash->success(__('Cartão salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O cartão não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        

        
        $this->set(compact('carto'));
        $this->set('_serialize', ['carto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carto = $this->Cartoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            
            $carto = $this->Cartoes->patchEntity($carto, $this->request->data);
            
            //////////////////////

            $filename = $this->UploadImgProduto->send($carto, 'cartoes');
            $carto->img_produto = $filename;
                  
            /////////////////////   
            
            if ($this->Cartoes->save($carto)) {
                $this->Flash->success(__('Cartão salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O cartão não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('carto'));
        $this->set('_serialize', ['carto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carto = $this->Cartoes->get($id);
        if ($this->Cartoes->delete($carto)) {
            $this->Flash->success(__('Cartão deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O cartão não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
