<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mercado".
 *
 * @property int $idMercado
 * @property string|null $Nome_Mercado
 * @property resource|null $FotoMercado
 * @property string|null $Endereco
 * @property int|null $CEP
 * @property int|null $CNPJ
 * @property string|null $Estado
 * @property string|null $Cidade
 * @property string|null $Bairro
 */
class Mercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FotoMercado'], 'string'],
            [['CEP', 'CNPJ'], 'integer'],
            [['Nome_Mercado'], 'string', 'max' => 40],
            [['Endereco', 'Bairro'], 'string', 'max' => 50],
            [['Estado', 'Cidade'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMercado' => 'Id Mercado',
            'Nome_Mercado' => 'Nome Mercado',
            'FotoMercado' => 'Foto Mercado',
            'Endereco' => 'Endereco',
            'CEP' => 'Cep',
            'CNPJ' => 'Cnpj',
            'Estado' => 'Estado',
            'Cidade' => 'Cidade',
            'Bairro' => 'Bairro',
        ];
    }
}
