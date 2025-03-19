<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PengkajianRestrain $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pengkajian Restrains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengkajian-restrain-view">

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
            'no_rawat',
            'tanggal',
            'nip',
            'gcs',
            'refleka_cahaya_ka',
            'refleka_cahaya_ki',
            'ukuran_pupil_ka',
            'ukuran_pupil_ki',
            'td',
            'suhu',
            'rr',
            'nadi',
            'hasil_observasi',
            'pertimbangan_klinis',
            'restrain_non_farmakologi',
            'restrain_non_farmakologi_keterangan',
            'restrain_farmakologi',
            'sudah_dijelaskan_keluarga',
            'keluarga_yang_menyetujui',
        ],
    ]) ?>

</div>
