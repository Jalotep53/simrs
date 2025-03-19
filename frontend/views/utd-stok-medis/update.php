<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdStokMedis $model */

$this->title = 'Update Utd Stok Medis: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Utd Stok Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-stok-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
