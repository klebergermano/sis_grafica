<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teste Model
 *
 * @method \App\Model\Entity\Teste get($primaryKey, $options = [])
 * @method \App\Model\Entity\Teste newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Teste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teste|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Teste[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teste findOrCreate($search, callable $callback = null)
 */
class TesteTable extends Table
{
    
        
    public function beforeSave($options = array())
{
    if(!empty($this->teste['Model']['campoDoArquivo']['name'])) {
    }
}

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('teste');
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
            ->allowEmpty('url');

        return $validator;
    }

    
    
}
