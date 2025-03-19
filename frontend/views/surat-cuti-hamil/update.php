<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratCutiHamil $model */

$this->title = 'Update Surat Cuti Hamil: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Cuti Hamils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-cuti-hamil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
