<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mercado */

$this->title = $model->idMercado;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mercado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idMercado' => $model->idMercado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idMercado' => $model->idMercado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMercado',
            'Nome_Mercado',
            'FotoMercado',
            'Endereco',
            'CEP',
            'CNPJ',
            'Estado',
            'Cidade',
            'Bairro',
        ],
    ]) ?>

</div>
