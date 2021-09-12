<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MercadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mercados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mercado'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idMercado',
            'Nome_Mercado',
            'FotoMercado',
            'Endereco',
            'CEP',
            //'CNPJ',
            //'Estado',
            //'Cidade',
            //'Bairro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
