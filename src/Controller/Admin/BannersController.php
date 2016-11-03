<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 */
class BannersController extends AppController
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
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
        $this->set('_serialize', ['banners']);
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);

        $this->set('banner', $banner);
        $this->set('_serialize', ['banner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            
             //////////////////////
            
            $filename = $this->UploadImgProduto->send($banner, 'banners');
            $banner->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('Banner salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Banner não pode ser salvo. Por favor, tente novamente.'));
            }
        }
              
                
             /*          
       $categoria = $this->Banners->CategoriaProdutos->find('list', ['limit' => 200]);
*/
        $this->set(compact('banner' /*, 'categoria'*/));
     
  
      
         $this->set('_serialize', ['banner']);
        
        
    
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->data);
            
           //////////////////////
            
            $filename = $this->UploadImgProduto->send($banner, 'banners');
            $banner->img_produto = $filename;
                  
            /////////////////////  
            
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('Banner salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O Banner não pode ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('banner'));
        $this->set('_serialize', ['banner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('Banner deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O Banner não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
