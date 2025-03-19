<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatNaikGaji $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Naik Gajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-naik-gaji-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'pangkatjabatan' => $model->pangkatjabatan, 'gapok' => $model->gapok], [
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
            'id',
            'pangkatjabatan',
            'gapok',
            'tmt_berkala',
            'tmt_berkala_yad',
            'no_sk',
            'tgl_sk',
            'masa_kerja',
            'bulan_kerja',
            'berkas',
        ],
    ]) ?>

</div>
