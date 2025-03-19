<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanBerkas $model */

$this->title = 'Update Peminjaman Berkas: ' . $model->peminjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Berkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->peminjam, 'url' => ['view', 'peminjam' => $model->peminjam, 'id_ruang' => $model->id_ruang, 'no_rkm_medis' => $model->no_rkm_medis, 'tgl_pinjam' => $model->tgl_pinjam, 'nip' => $model->nip]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-berkas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
