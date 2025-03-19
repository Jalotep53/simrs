<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisHibah $model */

$this->title = 'Update Inventaris Hibah: ' . $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_hibah, 'url' => ['view', 'no_hibah' => $model->no_hibah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-hibah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
