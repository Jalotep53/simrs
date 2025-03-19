<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanPetugas $model */

$this->title = 'Update Set Otomatis Tindakan Ralan Petugas: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralan Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-otomatis-tindakan-ralan-petugas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
