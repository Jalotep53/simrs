<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ketidakhadiran $model */

$this->title = 'Update Ketidakhadiran: ' . $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Ketidakhadirans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl, 'url' => ['view', 'tgl' => $model->tgl, 'id' => $model->id, 'jns' => $model->jns]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ketidakhadiran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
