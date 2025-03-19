<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasuk $model */

$this->title = 'Update Surat Masuk: ' . $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_urut, 'url' => ['view', 'no_urut' => $model->no_urut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-masuk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
