<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundlePlabsi $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Plabsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-bundle-plabsi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], [
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
            'tanggal',
            'id_ruang',
            'sebelum_melakukan_hand_hygiene',
            'menggunakan_apd_lengkap',
            'lokasi_pemasangan_sesuai',
            'alat_yang_digunakan_steril',
            'pembersihan_kulit',
            'setelah_melakukan_hand_hygiene',
            'perawatan_dressing_infus',
            'spoit_yang_digunakan_disposible',
            'memberi_tanggal_dan_jam_pemasangan_infus',
            'set_infus_setiap_72jam',
        ],
    ]) ?>

</div>
