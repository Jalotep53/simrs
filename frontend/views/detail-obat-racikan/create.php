<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikan $model */

$this->title = 'Create Detail Obat Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Obat Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-obat-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
