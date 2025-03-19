<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PencapaianKinerjaPegawai $model */

$this->title = 'Create Pencapaian Kinerja Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pencapaian Kinerja Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pencapaian-kinerja-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
