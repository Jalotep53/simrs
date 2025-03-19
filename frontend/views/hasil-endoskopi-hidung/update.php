<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiHidung $model */

$this->title = 'Update Hasil Endoskopi Hidung: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Hidungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-endoskopi-hidung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
