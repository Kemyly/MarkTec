<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $idProdutos
 * @property int $Tipo_idTipo
 * @property int $Usuario_idUsuario
 * @property string|null $Nome
 * @property string|null $Data_Entrada
 * @property resource|null $FotoProduto
 * @property float|null $Valor
 * @property int|null $id_Tipo
 * @property string|null $Nome_Mercado
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tipo_idTipo', 'Usuario_idUsuario'], 'required'],
            [['Tipo_idTipo', 'Usuario_idUsuario', 'id_Tipo'], 'integer'],
            [['Data_Entrada'], 'safe'],
            [['FotoProduto'], 'string'],
            [['Valor'], 'number'],
            [['Nome'], 'string', 'max' => 20],
            [['Nome_Mercado'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProdutos' => 'Id Produtos',
            'Tipo_idTipo' => 'Tipo Id Tipo',
            'Usuario_idUsuario' => 'Usuario Id Usuario',
            'Nome' => 'Nome',
            'Data_Entrada' => 'Data Entrada',
            'FotoProduto' => 'Foto Produto',
            'Valor' => 'Valor',
            'id_Tipo' => 'Id Tipo',
            'Nome_Mercado' => 'Nome Mercado',
        ];
    }
}
