<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLab $model */

$this->title = 'Create Detail Periksa Lab';
$this->params['breadcrumbs'][] = ['label' => 'Detail Periksa Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-periksa-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
