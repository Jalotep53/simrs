<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedahMulut $model */

$this->title = 'Create Penilaian Medis Ralan Bedah Mulut';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Bedah Muluts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-bedah-mulut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
