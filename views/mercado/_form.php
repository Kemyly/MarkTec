<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mercado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mercado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome_Mercado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FotoMercado')->textInput() ?>

    <?= $form->field($model, 'Endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEP')->textInput() ?>

    <?= $form->field($model, 'CNPJ')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bairro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
