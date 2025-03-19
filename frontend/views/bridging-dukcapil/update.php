<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingDukcapil $model */

$this->title = 'Update Bridging Dukcapil: ' . $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Dukcapils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rkm_medis, 'url' => ['view', 'no_rkm_medis' => $model->no_rkm_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-dukcapil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
