<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Spesialis $model */

$this->title = 'Update Spesialis: ' . $model->kd_sps;
$this->params['breadcrumbs'][] = ['label' => 'Spesialis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_sps, 'url' => ['view', 'kd_sps' => $model->kd_sps]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spesialis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
