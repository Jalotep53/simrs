<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisGambar $model */

$this->title = 'Update Inventaris Gambar: ' . $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_inventaris, 'url' => ['view', 'no_inventaris' => $model->no_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-gambar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
