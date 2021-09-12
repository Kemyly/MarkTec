<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MercadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mercado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMercado') ?>

    <?= $form->field($model, 'Nome_Mercado') ?>

    <?= $form->field($model, 'FotoMercado') ?>

    <?= $form->field($model, 'Endereco') ?>

    <?= $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'CNPJ') ?>

    <?php // echo $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'Cidade') ?>

    <?php // echo $form->field($model, 'Bairro') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
