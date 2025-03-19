<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenagihanPiutang $model */

$this->title = 'Update Penagihan Piutang: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penagihan-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
