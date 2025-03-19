<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganBendaTajam $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Benda Tajams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-pembuangan-benda-tajam-view">

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
            'setiap_injeksi_needle_langsung_dimasukkan_safety_box',
            'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box',
            'setiap_benda_tajam_jarum_dimasukkan_safety_box',
            'safety_box_tigaperempat_diganti',
            'safety_box_keadaan_bersih',
            'saftey_box_tertutup_setelah_digunakan',
        ],
    ]) ?>

</div>
