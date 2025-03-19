<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatJabatan $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-jabatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'jabatan' => $model->jabatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'jabatan' => $model->jabatan], [
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
            'jabatan',
            'tmt_pangkat',
            'tmt_pangkat_yad',
            'pejabat_penetap',
            'nomor_sk',
            'tgl_sk',
            'dasar_peraturan',
            'masa_kerja',
            'bln_kerja',
            'berkas',
        ],
    ]) ?>

</div>
