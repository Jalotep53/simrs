<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarRacikan $model */

$this->title = 'Update Resep Luar Racikan: ' . $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep Luar Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_resep, 'url' => ['view', 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-luar-racikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
