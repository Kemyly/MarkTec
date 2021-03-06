<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Senha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cpf')->textInput() ?>

    <?= $form->field($model, 'Endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cep')->textInput() ?>

    <?= $form->field($model, 'Estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bairro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
