<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $password
 * @property string $privilegios
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Usuario extends Entity
{


    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    
        public function _setPassword($password){
        
        return (new DefaultPasswordHasher)->hash($password);
        
    }
    
}
