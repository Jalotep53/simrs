<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDetailPemisahanKomponen $model */

$this->title = 'Update Utd Detail Pemisahan Komponen: ' . $model->no_kantong;
$this->params['breadcrumbs'][] = ['label' => 'Utd Detail Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kantong, 'url' => ['view', 'no_kantong' => $model->no_kantong]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-detail-pemisahan-komponen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
