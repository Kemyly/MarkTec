<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idProdutos') ?>

    <?= $form->field($model, 'Tipo_idTipo') ?>

    <?= $form->field($model, 'Usuario_idUsuario') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'Data_Entrada') ?>

    <?php // echo $form->field($model, 'FotoProduto') ?>

    <?php // echo $form->field($model, 'Valor') ?>

    <?php // echo $form->field($model, 'id_Tipo') ?>

    <?php // echo $form->field($model, 'Nome_Mercado') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
