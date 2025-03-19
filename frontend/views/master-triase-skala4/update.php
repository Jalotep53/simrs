<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala4 $model */

$this->title = 'Update Master Triase Skala4: ' . $model->kode_skala4;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_skala4, 'url' => ['view', 'kode_skala4' => $model->kode_skala4]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-skala4-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
