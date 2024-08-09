<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penjab $model */

$this->title = 'Update Penjab: ' . $model->kd_pj;
$this->params['breadcrumbs'][] = ['label' => 'Penjabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_pj, 'url' => ['view', 'kd_pj' => $model->kd_pj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
