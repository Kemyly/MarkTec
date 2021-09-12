<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $idUsuario
 * @property string|null $Nome
 * @property string|null $Email
 * @property string|null $Senha
 * @property int|null $Cpf
 * @property string|null $Endereco
 * @property int|null $Cep
 * @property string|null $Estado
 * @property string|null $Cidade
 * @property string|null $Bairro
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Cpf', 'Cep'], 'integer'],
            [['Nome'], 'string', 'max' => 60],
            [['Email'], 'string', 'max' => 50],
            [['Senha', 'Cidade'], 'string', 'max' => 20],
            [['Endereco'], 'string', 'max' => 100],
            [['Estado'], 'string', 'max' => 2],
            [['Bairro'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'Nome' => 'Nome',
            'Email' => 'Email',
            'Senha' => 'Senha',
            'Cpf' => 'Cpf',
            'Endereco' => 'Endereco',
            'Cep' => 'Cep',
            'Estado' => 'Estado',
            'Cidade' => 'Cidade',
            'Bairro' => 'Bairro',
        ];
    }
}
