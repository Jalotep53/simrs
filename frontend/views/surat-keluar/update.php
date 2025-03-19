<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluar $model */

$this->title = 'Update Surat Keluar: ' . $model->no_urut;
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_urut, 'url' => ['view', 'no_urut' => $model->no_urut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-keluar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
