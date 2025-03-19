<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapurbarang $model */

$this->title = 'Update Dapurbarang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Dapurbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dapurbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
