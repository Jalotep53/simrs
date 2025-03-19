<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsDampakCidera $model */

$this->title = 'Update K3rs Dampak Cidera: ' . $model->kode_dampak;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Dampak Cideras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_dampak, 'url' => ['view', 'kode_dampak' => $model->kode_dampak]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-dampak-cidera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
