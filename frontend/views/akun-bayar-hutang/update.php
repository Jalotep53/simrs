<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunBayarHutang $model */

$this->title = 'Update Akun Bayar Hutang: ' . $model->nama_bayar;
$this->params['breadcrumbs'][] = ['label' => 'Akun Bayar Hutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_bayar, 'url' => ['view', 'nama_bayar' => $model->nama_bayar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-bayar-hutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
