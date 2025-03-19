<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiDepoFarmasi $model */

$this->title = 'Create Satu Sehat Mapping Lokasi Depo Farmasi';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Depo Farmasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-depo-farmasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
