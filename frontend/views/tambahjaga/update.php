<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tambahjaga $model */

$this->title = 'Update Tambahjaga: ' . $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Tambahjagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl, 'url' => ['view', 'tgl' => $model->tgl, 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tambahjaga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
