<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditBundleIsk $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Bundle Isks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-bundle-isk-view">

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
            'pemasangan_sesuai_indikasi',
            'hand_hygiene',
            'menggunakan_apd_yang_tepat',
            'pemasangan_menggunakan_alat_steril',
            'segera_dilepas_setelah_tidak_diperlukan',
            'pengisian_balon_sesuai_petunjuk',
            'fiksasi_kateter_dengan_plester',
            'urinebag_menggantung_tidak_menyentuh_lantai',
        ],
    ]) ?>

</div>
