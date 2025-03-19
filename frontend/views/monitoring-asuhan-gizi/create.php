<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringAsuhanGizi $model */

$this->title = 'Create Monitoring Asuhan Gizi';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring Asuhan Gizis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoring-asuhan-gizi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
