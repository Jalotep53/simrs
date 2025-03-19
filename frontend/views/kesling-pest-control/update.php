<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingPestControl $model */

$this->title = 'Update Kesling Pest Control: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Kesling Pest Controls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'nip' => $model->nip, 'tanggal' => $model->tanggal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kesling-pest-control-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
