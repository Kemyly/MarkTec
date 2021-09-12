<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos_has_mercado */

$this->title = Yii::t('app', 'Create Produtos Has Mercado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos Has Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-has-mercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
