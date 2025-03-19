<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasi $model */

$this->title = $model->kode_paket;
$this->params['breadcrumbs'][] = ['label' => 'Paket Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="paket-operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_paket' => $model->kode_paket], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_paket' => $model->kode_paket], [
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
            'kode_paket',
            'nm_perawatan',
            'kategori',
            'operator1',
            'operator2',
            'operator3',
            'asisten_operator1',
            'asisten_operator2',
            'asisten_operator3',
            'instrumen',
            'dokter_anak',
            'perawaat_resusitas',
            'dokter_anestesi',
            'asisten_anestesi',
            'asisten_anestesi2',
            'bidan',
            'bidan2',
            'bidan3',
            'perawat_luar',
            'sewa_ok',
            'alat',
            'akomodasi',
            'bagian_rs',
            'omloop',
            'omloop2',
            'omloop3',
            'omloop4',
            'omloop5',
            'sarpras',
            'dokter_pjanak',
            'dokter_umum',
            'kd_pj',
            'status',
            'kelas',
        ],
    ]) ?>

</div>
