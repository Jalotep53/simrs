<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSrbBpjs $model */

$this->title = 'Update Bridging Srb Bpjs: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Bridging Srb Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep, 'no_srb' => $model->no_srb]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bridging-srb-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
