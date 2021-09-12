<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategorias */

$this->title = Yii::t('app', 'Update Subcategorias: {name}', [
    'name' => $model->idSubcategorias,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subcategorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSubcategorias, 'url' => ['view', 'idSubcategorias' => $model->idSubcategorias]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="subcategorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
