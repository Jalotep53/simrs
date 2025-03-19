<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanPsikiatrik $model */

$this->title = 'Create Penilaian Medis Ralan Psikiatrik';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Ralan Psikiatriks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-psikiatrik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
