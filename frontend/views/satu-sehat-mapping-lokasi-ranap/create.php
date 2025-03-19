<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRanap $model */

$this->title = 'Create Satu Sehat Mapping Lokasi Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
