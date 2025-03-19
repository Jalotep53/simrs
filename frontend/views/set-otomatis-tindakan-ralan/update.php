<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalan $model */

$this->title = 'Update Set Otomatis Tindakan Ralan: ' . $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokter, 'url' => ['view', 'kd_dokter' => $model->kd_dokter, 'kd_jenis_prw' => $model->kd_jenis_prw, 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-otomatis-tindakan-ralan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
