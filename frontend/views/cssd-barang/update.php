<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CssdBarang $model */

$this->title = 'Update Cssd Barang: ' . $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Cssd Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_inventaris, 'url' => ['view', 'no_inventaris' => $model->no_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cssd-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
