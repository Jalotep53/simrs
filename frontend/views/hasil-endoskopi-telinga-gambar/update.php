<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelingaGambar $model */

$this->title = 'Update Hasil Endoskopi Telinga Gambar: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Telinga Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-endoskopi-telinga-gambar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
