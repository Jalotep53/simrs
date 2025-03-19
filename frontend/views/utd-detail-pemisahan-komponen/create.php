<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDetailPemisahanKomponen $model */

$this->title = 'Create Utd Detail Pemisahan Komponen';
$this->params['breadcrumbs'][] = ['label' => 'Utd Detail Pemisahan Komponens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-detail-pemisahan-komponen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
