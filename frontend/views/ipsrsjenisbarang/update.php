<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsjenisbarang $model */

$this->title = 'Update Ipsrsjenisbarang: ' . $model->kd_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrsjenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_jenis, 'url' => ['view', 'kd_jenis' => $model->kd_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrsjenisbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
