<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisPenyerahanDarah $model */

$this->title = 'Create Utd Penggunaan Medis Penyerahan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Medis Penyerahan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-medis-penyerahan-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
