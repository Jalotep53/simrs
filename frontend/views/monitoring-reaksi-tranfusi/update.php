<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringReaksiTranfusi $model */

$this->title = 'Update Monitoring Reaksi Tranfusi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Reaksi Tranfusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoring-reaksi-tranfusi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
