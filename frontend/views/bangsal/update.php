<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Bangsal $model */

$this->title = 'Update Bangsal: ' . $model->kd_bangsal;
$this->params['breadcrumbs'][] = ['label' => 'Bangsals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bangsal, 'url' => ['view', 'kd_bangsal' => $model->kd_bangsal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bangsal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
