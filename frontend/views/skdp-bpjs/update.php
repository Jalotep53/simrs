<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkdpBpjs $model */

$this->title = 'Update Skdp Bpjs: ' . $model->tahun;
$this->params['breadcrumbs'][] = ['label' => 'Skdp Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tahun, 'url' => ['view', 'tahun' => $model->tahun, 'no_antrian' => $model->no_antrian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skdp-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
