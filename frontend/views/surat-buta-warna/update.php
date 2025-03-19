<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratButaWarna $model */

$this->title = 'Update Surat Buta Warna: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Buta Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-buta-warna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
