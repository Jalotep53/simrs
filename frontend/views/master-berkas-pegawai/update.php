<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterBerkasPegawai $model */

$this->title = 'Update Master Berkas Pegawai: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Master Berkas Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-berkas-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
