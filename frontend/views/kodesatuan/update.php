<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kodesatuan $model */

$this->title = 'Update Kodesatuan: ' . $model->kode_sat;
$this->params['breadcrumbs'][] = ['label' => 'Kodesatuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_sat, 'url' => ['view', 'kode_sat' => $model->kode_sat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kodesatuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
