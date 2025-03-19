<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareRujukSubspesialis $model */

$this->title = 'Update Pcare Rujuk Subspesialis: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Rujuk Subspesialis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-rujuk-subspesialis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
