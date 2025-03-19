<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PersonalPasien $model */

$this->title = 'Create Personal Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Personal Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
