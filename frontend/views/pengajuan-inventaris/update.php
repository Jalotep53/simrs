<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanInventaris $model */

$this->title = 'Update Pengajuan Inventaris: ' . $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pengajuan, 'url' => ['view', 'no_pengajuan' => $model->no_pengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuan-inventaris-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
