<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BalasanPengaduan $model */

$this->title = 'Create Balasan Pengaduan';
$this->params['breadcrumbs'][] = ['label' => 'Balasan Pengaduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="balasan-pengaduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
