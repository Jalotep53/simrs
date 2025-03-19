<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala3 $model */

$this->title = 'Update Master Triase Skala3: ' . $model->kode_skala3;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_skala3, 'url' => ['view', 'kode_skala3' => $model->kode_skala3]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-triase-skala3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
