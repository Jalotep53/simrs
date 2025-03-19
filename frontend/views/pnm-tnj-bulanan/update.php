<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PnmTnjBulanan $model */

$this->title = 'Update Pnm Tnj Bulanan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pnm Tnj Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_tnj' => $model->id_tnj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pnm-tnj-bulanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
