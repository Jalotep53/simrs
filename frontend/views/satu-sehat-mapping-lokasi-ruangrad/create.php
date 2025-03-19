<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuangrad $model */

$this->title = 'Create Satu Sehat Mapping Lokasi Ruangrad';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ruangrads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ruangrad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
