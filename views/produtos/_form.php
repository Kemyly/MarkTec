<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tipo_idTipo')->textInput() ?>

    <?= $form->field($model, 'Usuario_idUsuario')->textInput() ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Data_Entrada')->textInput() ?>

    <?= $form->field($model, 'FotoProduto')->textInput() ?>

    <?= $form->field($model, 'Valor')->textInput() ?>

    <?= $form->field($model, 'id_Tipo')->textInput() ?>

    <?= $form->field($model, 'Nome_Mercado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
