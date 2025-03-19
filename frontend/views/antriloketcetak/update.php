<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Antriloketcetak $model */

$this->title = 'Update Antriloketcetak: ' . $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Antriloketcetaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal, 'url' => ['view', 'tanggal' => $model->tanggal, 'nomor' => $model->nomor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="antriloketcetak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
