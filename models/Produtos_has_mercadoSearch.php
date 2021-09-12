<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produtos_has_mercado;

/**
 * Produtos_has_mercadoSearch represents the model behind the search form of `app\models\Produtos_has_mercado`.
 */
class Produtos_has_mercadoSearch extends Produtos_has_mercado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Produtos_idProdutos', 'Mercado_idMercado'], 'integer'],
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
        $query = Produtos_has_mercado::find();

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
            'Produtos_idProdutos' => $this->Produtos_idProdutos,
            'Mercado_idMercado' => $this->Mercado_idMercado,
        ]);

        return $dataProvider;
    }
}
