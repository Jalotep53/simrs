<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasi $model */

$this->title = 'Create Rekonsiliasi Obat Konfirmasi';
$this->params['breadcrumbs'][] = ['label' => 'Rekonsiliasi Obat Konfirmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekonsiliasi-obat-konfirmasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
