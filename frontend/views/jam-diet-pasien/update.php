<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamDietPasien $model */

$this->title = 'Update Jam Diet Pasien: ' . $model->waktu;
$this->params['breadcrumbs'][] = ['label' => 'Jam Diet Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->waktu, 'url' => ['view', 'waktu' => $model->waktu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jam-diet-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
