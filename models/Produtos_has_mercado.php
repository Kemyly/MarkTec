<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos_has_mercado".
 *
 * @property int $Produtos_idProdutos
 * @property int $Mercado_idMercado
 */
class Produtos_has_mercado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos_has_mercado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Produtos_idProdutos', 'Mercado_idMercado'], 'required'],
            [['Produtos_idProdutos', 'Mercado_idMercado'], 'integer'],
            [['Produtos_idProdutos', 'Mercado_idMercado'], 'unique', 'targetAttribute' => ['Produtos_idProdutos', 'Mercado_idMercado']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Produtos_idProdutos' => 'Produtos Id Produtos',
            'Mercado_idMercado' => 'Mercado Id Mercado',
        ];
    }
}
