<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Dokter $model */

$this->title = $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dokter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_dokter' => $model->kd_dokter], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_dokter' => $model->kd_dokter], [
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
            'nm_dokter',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            'gol_drh',
            'agama',
            'almt_tgl',
            'no_telp',
            'stts_nikah',
            'kd_sps',
            'alumni',
            'no_ijn_praktek',
            'status',
        ],
    ]) ?>

</div>
