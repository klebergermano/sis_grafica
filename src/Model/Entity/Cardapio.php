<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cardapio Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $material
 * @property int $quantidade
 * @property string $acabamento
 * @property string $dobra
 * @property string $tamanho
 * @property float $custo
 * @property float $preco
 * @property string $cores
 * @property string $gramatura
 * @property string $img_produto
 * @property string $publicado
 */
class Cardapio extends Entity
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
}
