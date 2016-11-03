<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * CategoriaProdutos Controller
 *
 * @property \App\Model\Table\CategoriaProdutosTable $CategoriaProdutos
 */
class CategoriaProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoriaProdutos = $this->paginate($this->CategoriaProdutos);

        $this->set(compact('categoriaProdutos'));
        $this->set('_serialize', ['categoriaProdutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriaProduto = $this->CategoriaProdutos->get($id, [
            'contain' => []
        ]);

        $this->set('categoriaProduto', $categoriaProduto);
        $this->set('_serialize', ['categoriaProduto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriaProduto = $this->CategoriaProdutos->newEntity();
        if ($this->request->is('post')) {
            $categoriaProduto = $this->CategoriaProdutos->patchEntity($categoriaProduto, $this->request->data);
            if ($this->CategoriaProdutos->save($categoriaProduto)) {
                $this->Flash->success(__('The categoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoriaProduto'));
        $this->set('_serialize', ['categoriaProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriaProduto = $this->CategoriaProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaProduto = $this->CategoriaProdutos->patchEntity($categoriaProduto, $this->request->data);
            if ($this->CategoriaProdutos->save($categoriaProduto)) {
                $this->Flash->success(__('The categoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria produto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoriaProduto'));
        $this->set('_serialize', ['categoriaProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaProduto = $this->CategoriaProdutos->get($id);
        if ($this->CategoriaProdutos->delete($categoriaProduto)) {
            $this->Flash->success(__('The categoria produto has been deleted.'));
        } else {
            $this->Flash->error(__('The categoria produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
