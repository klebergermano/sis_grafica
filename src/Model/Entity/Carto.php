<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carto Entity
 *
 * @property int $id
 * @property string $categoria
 * @property string $nome
 * @property string $cores
 * @property string $gramatura
 * @property string $acabamento
 * @property string $corte
 * @property int $quantidade
 * @property string $material
 * @property float $custo
 * @property float $preco
 * @property string $img_produto
 * @property string $publicado
 * @property string $tamanho
 * @property string $ordem_produto
 */
class Carto extends Entity
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
