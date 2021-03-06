<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mercado */

$this->title = Yii::t('app', 'Create Mercado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mercado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
