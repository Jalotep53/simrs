<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisProdusen $model */

$this->title = 'Update Inventaris Produsen: ' . $model->kode_produsen;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Produsens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_produsen, 'url' => ['view', 'kode_produsen' => $model->kode_produsen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-produsen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
