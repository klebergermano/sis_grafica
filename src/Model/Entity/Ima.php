<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ima Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $material
 * @property string $acabamento
 * @property string $gramatura
 * @property int $quantidade
 * @property string $tamanho
 * @property float $custo
 * @property float $preco
 * @property string $corte
 * @property string $img_produto
 * @property string $publicado
 * @property string $ordem_produto
 */
class Ima extends Entity
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
