<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanBedah $model */

$this->title = 'Create Penilaian Medis Ralan Bedah';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Bedahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-bedah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
