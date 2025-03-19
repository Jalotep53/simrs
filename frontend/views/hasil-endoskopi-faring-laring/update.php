<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiFaringLaring $model */

$this->title = 'Update Hasil Endoskopi Faring Laring: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Endoskopi Faring Larings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-endoskopi-faring-laring-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
