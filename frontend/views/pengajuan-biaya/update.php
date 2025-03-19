<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiaya $model */

$this->title = 'Update Pengajuan Biaya: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuan-biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
