<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penyakit $model */

$this->title = 'Update Penyakit: ' . $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_penyakit, 'url' => ['view', 'kd_penyakit' => $model->kd_penyakit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
