<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BpjsPrb $model */

$this->title = 'Update Bpjs Prb: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Bpjs Prbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bpjs-prb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
