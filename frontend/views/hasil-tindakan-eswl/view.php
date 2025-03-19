<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilTindakanEswl $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Tindakan Eswls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-tindakan-eswl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai], [
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
            'no_rawat',
            'mulai',
            'selesai',
            'kd_dokter',
            'nip',
            'diagnosa',
            'tindakan',
            'obat_analgesik',
            'obat_lain',
            'uraian_tindakan',
            'uraian_tindakan_focus',
            'uraian_tindakan_rate',
            'uraian_tindakan_power',
            'uraian_tindakan_shock',
            'diintegrasi',
            'kekurangan',
            'anjungan',
        ],
    ]) ?>

</div>
