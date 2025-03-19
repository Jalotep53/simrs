<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanKandungan $model */

$this->title = 'Create Penilaian Medis Ralan Kandungan';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Kandungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-kandungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
