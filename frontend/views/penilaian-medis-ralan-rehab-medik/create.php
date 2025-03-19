<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanRehabMedik $model */

$this->title = 'Create Penilaian Medis Ralan Rehab Medik';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Rehab Mediks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-rehab-medik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
