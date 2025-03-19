<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePendaftaran $model */

$this->title = 'Update Pcare Pendaftaran: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
