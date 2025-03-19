<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCorona $model */

$this->title = 'Update Deteksi Dini Corona: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Deteksi Dini Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deteksi-dini-corona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
