<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Rekening $model */

$this->title = 'Update Rekening: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Rekenings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekening-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
