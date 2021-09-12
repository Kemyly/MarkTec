<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mercado;

/**
 * MercadoSearch represents the model behind the search form of `app\models\Mercado`.
 */
class MercadoSearch extends Mercado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idMercado', 'CEP', 'CNPJ'], 'integer'],
            [['Nome_Mercado', 'FotoMercado', 'Endereco', 'Estado', 'Cidade', 'Bairro'], 'safe'],
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
        $query = Mercado::find();

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
            'idMercado' => $this->idMercado,
            'CEP' => $this->CEP,
            'CNPJ' => $this->CNPJ,
        ]);

        $query->andFilterWhere(['like', 'Nome_Mercado', $this->Nome_Mercado])
            ->andFilterWhere(['like', 'FotoMercado', $this->FotoMercado])
            ->andFilterWhere(['like', 'Endereco', $this->Endereco])
            ->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'Cidade', $this->Cidade])
            ->andFilterWhere(['like', 'Bairro', $this->Bairro]);

        return $dataProvider;
    }
}
