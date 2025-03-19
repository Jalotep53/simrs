<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratSubKlasifikasi $model */

$this->title = 'Create Surat Sub Klasifikasi';
$this->params['breadcrumbs'][] = ['label' => 'Surat Sub Klasifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-sub-klasifikasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
