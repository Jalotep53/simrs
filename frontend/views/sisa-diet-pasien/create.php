<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SisaDietPasien $model */

$this->title = 'Create Sisa Diet Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Sisa Diet Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sisa-diet-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
