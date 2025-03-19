<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganCovid $model */

$this->title = 'Create Surat Keterangan Covid';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Covids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-covid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
