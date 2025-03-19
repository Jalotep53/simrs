<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanObservasiRanapKebidanan $model */

$this->title = 'Create Catatan Observasi Ranap Kebidanan';
$this->params['breadcrumbs'][] = ['label' => 'Catatan Observasi Ranap Kebidanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catatan-observasi-ranap-kebidanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
