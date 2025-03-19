<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanCuti $model */

$this->title = 'Update Pengajuan Cuti: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuan-cuti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
