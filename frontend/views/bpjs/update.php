<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Bpjs $model */

$this->title = 'Update Bpjs: ' . $model->stts;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stts, 'url' => ['view', 'stts' => $model->stts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
