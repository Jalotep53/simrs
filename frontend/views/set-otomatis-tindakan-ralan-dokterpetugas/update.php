<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanDokterpetugas $model */

$this->title = 'Update Set Otomatis Tindakan Ralan Dokterpetugas: ' . $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralan Dokterpetugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokter, 'url' => ['view', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-otomatis-tindakan-ralan-dokterpetugas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
