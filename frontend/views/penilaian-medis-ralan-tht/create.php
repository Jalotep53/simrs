<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanTht $model */

$this->title = 'Create Penilaian Medis Ralan Tht';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Thts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-tht-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
