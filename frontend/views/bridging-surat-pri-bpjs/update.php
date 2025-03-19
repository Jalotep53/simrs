<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratPriBpjs $model */

$this->title = 'Update Bridging Surat Pri Bpjs: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Surat Pri Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-surat-pri-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
