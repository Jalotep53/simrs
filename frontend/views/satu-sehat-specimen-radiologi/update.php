<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatSpecimenRadiologi $model */

$this->title = 'Update Satu Sehat Specimen Radiologi: ' . $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Specimen Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->noorder, 'url' => ['view', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satu-sehat-specimen-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
