<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanGawatDaruratPsikiatri $model */

$this->title = 'Create Penilaian Medis Ralan Gawat Darurat Psikiatri';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Gawat Darurat Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-gawat-darurat-psikiatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
