<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObat $model */

$this->title = 'Create Detail Pemberian Obat';
$this->params['breadcrumbs'][] = ['label' => 'Detail Pemberian Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pemberian-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
