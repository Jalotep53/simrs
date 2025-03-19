<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPerbaikanInventaris $model */

$this->title = 'Create Permintaan Perbaikan Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Perbaikan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-perbaikan-inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
