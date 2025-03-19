<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiRanapPostpartum $model */

$this->title = 'Create Catatan Observasi Ranap Postpartum';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Observasi Ranap Postparta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-observasi-ranap-postpartum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
