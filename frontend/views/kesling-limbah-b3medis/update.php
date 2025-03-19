<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medis $model */

$this->title = 'Update Kesling Limbah B3medis: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Kesling Limbah B3medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kesling-limbah-b3medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
