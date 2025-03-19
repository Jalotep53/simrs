<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetPjlab $model */

$this->title = 'Update Set Pjlab: ' . $model->kd_dokterlab;
$this->params['breadcrumbs'][] = ['label' => 'Set Pjlabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dokterlab, 'url' => ['view', 'kd_dokterlab' => $model->kd_dokterlab, 'kd_dokterrad' => $model->kd_dokterrad, 'kd_dokterhemodialisa' => $model->kd_dokterhemodialisa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-pjlab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
