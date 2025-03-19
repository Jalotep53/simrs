<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPenyerahanResepObat $model */

$this->title = 'Create Bukti Penyerahan Resep Obat';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Penyerahan Resep Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-penyerahan-resep-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
