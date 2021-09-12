<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mercado */

$this->title = Yii::t('app', 'Update Mercado: {name}', [
    'name' => $model->idMercado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMercado, 'url' => ['view', 'idMercado' => $model->idMercado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mercado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
