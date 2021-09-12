<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos_has_mercado */

$this->title = $model->Produtos_idProdutos;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos Has Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produtos-has-mercado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'Produtos_idProdutos' => $model->Produtos_idProdutos, 'Mercado_idMercado' => $model->Mercado_idMercado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'Produtos_idProdutos' => $model->Produtos_idProdutos, 'Mercado_idMercado' => $model->Mercado_idMercado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Produtos_idProdutos',
            'Mercado_idMercado',
        ],
    ]) ?>

</div>
