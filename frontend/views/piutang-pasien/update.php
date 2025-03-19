<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangPasien $model */

$this->title = 'Update Piutang Pasien: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Piutang Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="piutang-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
