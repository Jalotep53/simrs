<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala1 $model */

$this->title = 'Update Master Triase Skala1: ' . $model->kode_skala1;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_skala1, 'url' => ['view', 'kode_skala1' => $model->kode_skala1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-skala1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
