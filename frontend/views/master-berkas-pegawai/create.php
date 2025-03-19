<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterBerkasPegawai $model */

$this->title = 'Create Master Berkas Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Master Berkas Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-berkas-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
