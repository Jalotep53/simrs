<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringReaksiTranfusi $model */

$this->title = 'Create Monitoring Reaksi Tranfusi';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Reaksi Tranfusis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoring-reaksi-tranfusi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
