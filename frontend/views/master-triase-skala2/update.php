<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala2 $model */

$this->title = 'Update Master Triase Skala2: ' . $model->kode_skala2;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_skala2, 'url' => ['view', 'kode_skala2' => $model->kode_skala2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-skala2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
