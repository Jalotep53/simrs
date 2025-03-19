<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala5 $model */

$this->title = 'Update Master Triase Skala5: ' . $model->kode_skala5;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala5s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_skala5, 'url' => ['view', 'kode_skala5' => $model->kode_skala5]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-skala5-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
