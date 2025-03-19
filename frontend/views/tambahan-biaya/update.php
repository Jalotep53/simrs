<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TambahanBiaya $model */

$this->title = 'Update Tambahan Biaya: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Tambahan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'nama_biaya' => $model->nama_biaya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tambahan-biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
