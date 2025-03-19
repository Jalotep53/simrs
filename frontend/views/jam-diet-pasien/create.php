<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JamDietPasien $model */

$this->title = 'Create Jam Diet Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Jam Diet Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jam-diet-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
