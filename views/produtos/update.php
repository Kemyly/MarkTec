<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */

$this->title = Yii::t('app', 'Update Produtos: {name}', [
    'name' => $model->idProdutos,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idProdutos, 'url' => ['view', 'idProdutos' => $model->idProdutos]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="produtos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
