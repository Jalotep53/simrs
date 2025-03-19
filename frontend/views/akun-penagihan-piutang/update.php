<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPenagihanPiutang $model */

$this->title = 'Update Akun Penagihan Piutang: ' . $model->kd_rek;
$this->params['breadcrumbs'][] = ['label' => 'Akun Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rek, 'url' => ['view', 'kd_rek' => $model->kd_rek]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-penagihan-piutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
