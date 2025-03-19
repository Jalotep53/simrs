<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TimeoutSebelumInsisi $model */

$this->title = 'Update Timeout Sebelum Insisi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Timeout Sebelum Insisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timeout-sebelum-insisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
