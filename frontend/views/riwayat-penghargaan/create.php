<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenghargaan $model */

$this->title = 'Create Riwayat Penghargaan';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Penghargaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-penghargaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
