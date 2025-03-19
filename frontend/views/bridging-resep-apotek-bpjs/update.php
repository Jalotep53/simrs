<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingResepApotekBpjs $model */

$this->title = 'Update Bridging Resep Apotek Bpjs: ' . $model->no_sep_apotek;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Resep Apotek Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep_apotek, 'url' => ['view', 'no_sep_apotek' => $model->no_sep_apotek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-resep-apotek-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
