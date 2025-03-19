<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditCuciTanganMedis $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Cuci Tangan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-cuci-tangan-medis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'nik' => $model->nik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'nik' => $model->nik], [
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
            'nik',
            'sebelum_menyentuh_pasien',
            'sebelum_tehnik_aseptik',
            'setelah_terpapar_cairan_tubuh_pasien',
            'setelah_kontak_dengan_pasien',
            'setelah_kontak_dengan_lingkungan_pasien',
        ],
    ]) ?>

</div>
