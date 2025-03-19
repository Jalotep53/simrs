<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kabupaten $model */

$this->title = 'Update Kabupaten: ' . $model->kd_kab;
$this->params['breadcrumbs'][] = ['label' => 'Kabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_kab, 'url' => ['view', 'kd_kab' => $model->kd_kab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kabupaten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
