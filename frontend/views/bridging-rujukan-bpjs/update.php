<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjs $model */

$this->title = 'Update Bridging Rujukan Bpjs: ' . $model->no_rujukan;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Rujukan Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rujukan, 'url' => ['view', 'no_rujukan' => $model->no_rujukan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-rujukan-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
