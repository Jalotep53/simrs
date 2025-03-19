<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Operasi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="operasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tgl_operasi' => $model->tgl_operasi, 'kode_paket' => $model->kode_paket], [
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
            'tgl_operasi',
            'jenis_anasthesi',
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
            'omloop',
            'omloop2',
            'omloop3',
            'omloop4',
            'omloop5',
            'dokter_pjanak',
            'dokter_umum',
            'kode_paket',
            'biayaoperator1',
            'biayaoperator2',
            'biayaoperator3',
            'biayaasisten_operator1',
            'biayaasisten_operator2',
            'biayaasisten_operator3',
            'biayainstrumen',
            'biayadokter_anak',
            'biayaperawaat_resusitas',
            'biayadokter_anestesi',
            'biayaasisten_anestesi',
            'biayaasisten_anestesi2',
            'biayabidan',
            'biayabidan2',
            'biayabidan3',
            'biayaperawat_luar',
            'biayaalat',
            'biayasewaok',
            'akomodasi',
            'bagian_rs',
            'biaya_omloop',
            'biaya_omloop2',
            'biaya_omloop3',
            'biaya_omloop4',
            'biaya_omloop5',
            'biayasarpras',
            'biaya_dokter_pjanak',
            'biaya_dokter_umum',
            'status',
        ],
    ]) ?>

</div>
