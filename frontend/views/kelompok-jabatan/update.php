<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KelompokJabatan $model */

$this->title = 'Update Kelompok Jabatan: ' . $model->kode_kelompok;
$this->params['breadcrumbs'][] = ['label' => 'Kelompok Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_kelompok, 'url' => ['view', 'kode_kelompok' => $model->kode_kelompok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelompok-jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
