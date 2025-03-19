<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPenagihanPiutang $model */

$this->title = 'Create Detail Penagihan Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Detail Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-penagihan-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
