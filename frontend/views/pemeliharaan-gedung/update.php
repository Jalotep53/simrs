<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanGedung $model */

$this->title = 'Update Pemeliharaan Gedung: ' . $model->no_pemeliharaan;
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Gedungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pemeliharaan, 'url' => ['view', 'no_pemeliharaan' => $model->no_pemeliharaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemeliharaan-gedung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
