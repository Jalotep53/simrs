<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikan $model */

$this->title = 'Create Resep Dokter Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Resep Dokter Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-dokter-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
