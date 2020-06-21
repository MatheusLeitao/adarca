<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property int $familia_id
 * @property string $nome_pessoa
 * @property string $sexo
 * @property string|null $cpf
 * @property string|null $rg
 * @property \Cake\I18n\FrozenDate|null $nascimento
 * @property string|null $celular
 * @property string|null $celular2
 * @property string|null $email
 * @property string|null $profissao
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Familium $familium
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Pessoa extends Entity
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
        'familia_id' => true,
        'nome_pessoa' => true,
        'sexo' => true,
        'cpf' => true,
        'rg' => true,
        'nascimento' => true,
        'celular' => true,
        'celular2' => true,
        'email' => true,
        'profissao' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'familium' => true,
        'usuarios' => true,
    ];
}
