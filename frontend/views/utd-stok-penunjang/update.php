<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdStokPenunjang $model */

$this->title = 'Update Utd Stok Penunjang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Utd Stok Penunjangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-stok-penunjang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
