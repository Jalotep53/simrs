<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisLuka $model */

$this->title = 'Update K3rs Jenis Luka: ' . $model->kode_luka;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Jenis Lukas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_luka, 'url' => ['view', 'kode_luka' => $model->kode_luka]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-jenis-luka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
