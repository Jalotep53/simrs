<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhDewasa $model */

$this->title = 'Update Penilaian Lanjutan Resiko Jatuh Dewasa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Lanjutan Resiko Jatuh Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-lanjutan-resiko-jatuh-dewasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
