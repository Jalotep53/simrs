<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterBerkasDigital $model */

$this->title = 'Update Master Berkas Digital: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Master Berkas Digitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-berkas-digital-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
