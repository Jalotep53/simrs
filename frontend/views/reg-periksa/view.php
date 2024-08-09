<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksa $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Reg Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reg-periksa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'no_reg',
            'no_rawat',
            'tgl_registrasi',
            'jam_reg',
            'kd_dokter',
            'no_rkm_medis',
            'kd_poli',
            'p_jawab',
            'almt_pj',
            'hubunganpj',
            'biaya_reg',
            'stts',
            'stts_daftar',
            'status_lanjut',
            'kd_pj',
            'umurdaftar',
            'sttsumur',
            'status_bayar',
            'status_poli',
        ],
    ]) ?>

</div>
