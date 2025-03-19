<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Subrekening $model */

$this->title = 'Update Subrekening: ' . $model->kd_rek2;
$this->params['breadcrumbs'][] = ['label' => 'Subrekenings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek2, 'url' => ['view', 'kd_rek2' => $model->kd_rek2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subrekening-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
