<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos_has_mercado */

$this->title = Yii::t('app', 'Update Produtos Has Mercado: {name}', [
    'name' => $model->Produtos_idProdutos,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos Has Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Produtos_idProdutos, 'url' => ['view', 'Produtos_idProdutos' => $model->Produtos_idProdutos, 'Mercado_idMercado' => $model->Mercado_idMercado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="produtos-has-mercado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
