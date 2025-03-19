<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPiutangPasien $model */

$this->title = 'Create Detail Piutang Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Detail Piutang Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-piutang-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
