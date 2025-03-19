<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenagihanPiutang $model */

$this->title = 'Create Bukti Penagihan Piutang';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Penagihan Piutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-penagihan-piutang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
