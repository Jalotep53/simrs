<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsDewasa $model */

$this->title = 'Update Pemantauan Pews Dewasa: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pemantauan Pews Dewasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemantauan-pews-dewasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
