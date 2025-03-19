<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalTambahan $model */

$this->title = 'Create Jadwal Tambahan';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-tambahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
