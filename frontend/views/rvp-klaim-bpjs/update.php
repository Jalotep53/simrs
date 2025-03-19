<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjs $model */

$this->title = 'Update Rvp Klaim Bpjs: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Rvp Klaim Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rvp-klaim-bpjs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
