<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatri $model */

$this->title = 'Update Penilaian Tambahan Geriatri: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Tambahan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-tambahan-geriatri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
