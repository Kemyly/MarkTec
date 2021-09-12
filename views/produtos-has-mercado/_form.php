<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos_has_mercado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-has-mercado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Produtos_idProdutos')->textInput() ?>

    <?= $form->field($model, 'Mercado_idMercado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
