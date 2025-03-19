<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MatrikAkunJnsPerawatan $model */

$this->title = 'Update Matrik Akun Jns Perawatan: ' . $model->kd_jenis_prw;
$this->params['breadcrumbs'][] = ['label' => 'Matrik Akun Jns Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis_prw, 'url' => ['view', 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matrik-akun-jns-perawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
