<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisJenis $model */

$this->title = 'Update Inventaris Jenis: ' . $model->id_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis, 'url' => ['view', 'id_jenis' => $model->id_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-jenis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
