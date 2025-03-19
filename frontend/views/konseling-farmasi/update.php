<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KonselingFarmasi $model */

$this->title = 'Update Konseling Farmasi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Konseling Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konseling-farmasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
