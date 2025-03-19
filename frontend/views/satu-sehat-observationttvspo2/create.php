<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvspo2 $model */

$this->title = 'Create Satu Sehat Observationttvspo2';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Observationttvspo2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-observationttvspo2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
