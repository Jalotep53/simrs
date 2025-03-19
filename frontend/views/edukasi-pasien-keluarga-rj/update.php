<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EdukasiPasienKeluargaRj $model */

$this->title = 'Update Edukasi Pasien Keluarga Rj: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Edukasi Pasien Keluarga Rjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="edukasi-pasien-keluarga-rj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
