<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationrequestRacikan $model */

$this->title = 'Update Satu Sehat Medicationrequest Racikan: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Medicationrequest Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng, 'no_racik' => $model->no_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-medicationrequest-racikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
