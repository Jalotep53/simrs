<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikanDetail $model */

$this->title = 'Update Resep Dokter Racikan Detail: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep Dokter Racikan Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-dokter-racikan-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
