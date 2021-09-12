<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subcategorias".
 *
 * @property int $idSubcategorias
 * @property int $Tipo_idTipo
 * @property string|null $Nome
 */
class Subcategorias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subcategorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tipo_idTipo'], 'required'],
            [['Tipo_idTipo'], 'integer'],
            [['Nome'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSubcategorias' => 'Id Subcategorias',
            'Tipo_idTipo' => 'Tipo Id Tipo',
            'Nome' => 'Nome',
        ];
    }
}
