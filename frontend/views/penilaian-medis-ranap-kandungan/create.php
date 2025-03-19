<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRanapKandungan $model */

$this->title = 'Create Penilaian Medis Ranap Kandungan';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ranap Kandungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ranap-kandungan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
