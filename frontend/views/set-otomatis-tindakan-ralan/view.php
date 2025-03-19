<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalan $model */

$this->title = $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-otomatis-tindakan-ralan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj], [
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
            'kd_dokter',
            'kd_jenis_prw',
            'kd_pj',
        ],
    ]) ?>

</div>
