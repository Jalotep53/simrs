<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedisPembuatPernyataan $model */

$this->title = 'Create Surat Penolakan Anjuran Medis Pembuat Pernyataan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Penolakan Anjuran Medis Pembuat Pernyataans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-penolakan-anjuran-medis-pembuat-pernyataan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
