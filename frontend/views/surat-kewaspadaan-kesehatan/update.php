<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKewaspadaanKesehatan $model */

$this->title = 'Update Surat Kewaspadaan Kesehatan: ' . $model->no_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surat Kewaspadaan Kesehatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_surat, 'url' => ['view', 'no_surat' => $model->no_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-kewaspadaan-kesehatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
