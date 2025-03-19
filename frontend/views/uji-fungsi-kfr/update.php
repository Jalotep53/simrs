<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UjiFungsiKfr $model */

$this->title = 'Update Uji Fungsi Kfr: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Uji Fungsi Kfrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uji-fungsi-kfr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
