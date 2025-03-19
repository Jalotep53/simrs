<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Setsms $model */

$this->title = $model->kode_sms;
$this->params['breadcrumbs'][] = ['label' => 'Setsms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="setsms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_sms' => $model->kode_sms], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_sms' => $model->kode_sms], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_sms',
            'sintax_balasan:ntext',
        ],
    ]) ?>

</div>
