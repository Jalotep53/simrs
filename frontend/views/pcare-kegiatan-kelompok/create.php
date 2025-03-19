<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKegiatanKelompok $model */

$this->title = 'Create Pcare Kegiatan Kelompok';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kegiatan Kelompoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-kegiatan-kelompok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
