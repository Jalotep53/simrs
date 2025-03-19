<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiMasalah $model */

$this->title = 'Create Mpp Evaluasi Masalah';
$this->params['breadcrumbs'][] = ['label' => 'Mpp Evaluasi Masalahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-evaluasi-masalah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
