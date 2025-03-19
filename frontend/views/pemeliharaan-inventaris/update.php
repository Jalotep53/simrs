<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanInventaris $model */

$this->title = 'Update Pemeliharaan Inventaris: ' . $model->no_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_inventaris, 'url' => ['view', 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemeliharaan-inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
