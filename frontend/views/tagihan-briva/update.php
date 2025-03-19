<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TagihanBriva $model */

$this->title = 'Update Tagihan Briva: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Brivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan, 'status_tagihan' => $model->status_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-briva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
