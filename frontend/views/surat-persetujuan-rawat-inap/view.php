<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInap $model */

$this->title = $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Rawat Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-persetujuan-rawat-inap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_surat' => $model->no_surat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_surat' => $model->no_surat], [
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
            'no_surat',
            'no_rawat',
            'tanggal',
            'nama_pj',
            'no_ktppj',
            'pendidikan_pj',
            'alamatpj',
            'no_telppj',
            'ruang',
            'kelas',
            'hubungan',
            'hak_kelas',
            'nama_alamat_keluarga_terdekat',
            'bayar_secara',
            'nip',
        ],
    ]) ?>

</div>
