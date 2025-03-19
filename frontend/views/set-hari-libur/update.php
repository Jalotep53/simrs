<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHariLibur $model */

$this->title = 'Update Set Hari Libur: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Set Hari Liburs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="set-hari-libur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
