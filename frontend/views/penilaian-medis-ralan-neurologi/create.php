<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanNeurologi $model */

$this->title = 'Create Penilaian Medis Ralan Neurologi';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Neurologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-neurologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
