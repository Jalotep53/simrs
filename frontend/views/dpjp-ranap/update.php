<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DpjpRanap $model */

$this->title = 'Update Dpjp Ranap: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Dpjp Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_dokter' => $model->kd_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dpjp-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
