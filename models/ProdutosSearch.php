<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produtos;

/**
 * ProdutosSearch represents the model behind the search form of `app\models\Produtos`.
 */
class ProdutosSearch extends Produtos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idProdutos', 'Tipo_idTipo', 'Usuario_idUsuario', 'id_Tipo'], 'integer'],
            [['Nome', 'Data_Entrada', 'FotoProduto', 'Nome_Mercado'], 'safe'],
            [['Valor'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Produtos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idProdutos' => $this->idProdutos,
            'Tipo_idTipo' => $this->Tipo_idTipo,
            'Usuario_idUsuario' => $this->Usuario_idUsuario,
            'Data_Entrada' => $this->Data_Entrada,
            'Valor' => $this->Valor,
            'id_Tipo' => $this->id_Tipo,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'FotoProduto', $this->FotoProduto])
            ->andFilterWhere(['like', 'Nome_Mercado', $this->Nome_Mercado]);

        return $dataProvider;
    }
}
