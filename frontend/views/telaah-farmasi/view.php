<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TelaahFarmasi $model */

$this->title = $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Telaah Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="telaah-farmasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_resep' => $model->no_resep], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_resep' => $model->no_resep], [
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
            'no_resep',
            'resep_identifikasi_pasien',
            'resep_ket_identifikasi_pasien',
            'resep_tepat_obat',
            'resep_ket_tepat_obat',
            'resep_tepat_dosis',
            'resep_ket_tepat_dosis',
            'resep_tepat_cara_pemberian',
            'resep_ket_tepat_cara_pemberian',
            'resep_tepat_waktu_pemberian',
            'resep_ket_tepat_waktu_pemberian',
            'resep_ada_tidak_duplikasi_obat',
            'resep_ket_ada_tidak_duplikasi_obat',
            'resep_interaksi_obat',
            'resep_ket_interaksi_obat',
            'resep_kontra_indikasi_obat',
            'resep_ket_kontra_indikasi_obat',
            'obat_tepat_pasien',
            'obat_tepat_obat',
            'obat_tepat_dosis',
            'obat_tepat_cara_pemberian',
            'obat_tepat_waktu_pemberian',
            'nip',
        ],
    ]) ?>

</div>
