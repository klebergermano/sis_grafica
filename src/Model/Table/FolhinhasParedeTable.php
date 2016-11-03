<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FolhinhasParede Model
 *
 * @method \App\Model\Entity\FolhinhasParede get($primaryKey, $options = [])
 * @method \App\Model\Entity\FolhinhasParede newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FolhinhasParede[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FolhinhasParede|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FolhinhasParede patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FolhinhasParede[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FolhinhasParede findOrCreate($search, callable $callback = null)
 */
class FolhinhasParedeTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('folhinhas_parede');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('material');

        $validator
            ->integer('quantidade')
            ->allowEmpty('quantidade');

        $validator
            ->allowEmpty('acabamento');

        $validator
            ->allowEmpty('tamanho');

        $validator
            ->decimal('custo')
            ->allowEmpty('custo');

        $validator
            ->decimal('preco')
            ->requirePresence('preco', 'create')
            ->notEmpty('preco');

        $validator
            ->allowEmpty('gramatura');

        $validator
            ->allowEmpty('cores');

        $validator
            ->allowEmpty('img_produto');

        $validator
            ->allowEmpty('publicado');

        return $validator;
    }
}
