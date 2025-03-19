<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisMerk $model */

$this->title = 'Update Inventaris Merk: ' . $model->id_merk;
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Merks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_merk, 'url' => ['view', 'id_merk' => $model->id_merk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventaris-merk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
