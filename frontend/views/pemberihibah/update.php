<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Pemberihibah $model */

$this->title = 'Update Pemberihibah: ' . $model->kode_pemberi;
$this->params['breadcrumbs'][] = ['label' => 'Pemberihibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_pemberi, 'url' => ['view', 'kode_pemberi' => $model->kode_pemberi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemberihibah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
