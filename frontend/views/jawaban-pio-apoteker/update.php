<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JawabanPioApoteker $model */

$this->title = 'Update Jawaban Pio Apoteker: ' . $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Jawaban Pio Apotekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_permintaan, 'url' => ['view', 'no_permintaan' => $model->no_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jawaban-pio-apoteker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
