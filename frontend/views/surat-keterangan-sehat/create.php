<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeteranganSehat $model */

$this->title = 'Create Surat Keterangan Sehat';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keterangan Sehats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-sehat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
