<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBpdJateng $model */

$this->title = $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Bpd Jatengs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tagihan-bpd-jateng-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_nota' => $model->no_nota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_nota' => $model->no_nota], [
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
            'no_rkm_medis',
            'nm_pasien',
            'alamat',
            'jk',
            'tgl_lahir',
            'umurdaftar',
            'tgl_registrasi',
            'no_nota',
            'besar_bayar',
            'keterangan',
            'no_rawat',
            'status_lanjut',
            'tgl_closing',
            'status_bayar',
            'kasir',
            'diupdatebank',
            'referensi',
        ],
    ]) ?>

</div>
