<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiRuanglabmb $model */

$this->title = 'Create Satu Sehat Mapping Lokasi Ruanglabmb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Lokasi Ruanglabmbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-mapping-lokasi-ruanglabmb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
