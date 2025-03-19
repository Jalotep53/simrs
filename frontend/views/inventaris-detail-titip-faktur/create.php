<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisDetailTitipFaktur $model */

$this->title = 'Create Inventaris Detail Titip Faktur';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Detail Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-detail-titip-faktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
