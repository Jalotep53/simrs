<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangPenyerahanDarah $model */

$this->title = 'Create Utd Penggunaan Penunjang Penyerahan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-penunjang-penyerahan-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
