<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSat $model */

$this->title = 'Update Konver Sat: ' . $model->nilai;
$this->params['breadcrumbs'][] = ['label' => 'Konver Sats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nilai, 'url' => ['view', 'nilai' => $model->nilai, 'kode_sat' => $model->kode_sat, 'nilai_konversi' => $model->nilai_konversi, 'sat_konversi' => $model->sat_konversi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konver-sat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
