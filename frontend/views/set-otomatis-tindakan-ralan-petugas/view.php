<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanPetugas $model */

$this->title = $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralan Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="set-otomatis-tindakan-ralan-petugas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj], [
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
            'kd_jenis_prw',
            'kd_pj',
        ],
    ]) ?>

</div>
