<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuangok $model */

$this->title = 'Create Satu Sehat Mapping Lokasi Ruangok';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ruangoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ruangok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
