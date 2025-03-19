<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PasienBayi $model */

$this->title = 'Create Pasien Bayi';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Bayis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-bayi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
