<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingVaksin $model */

$this->title = $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Vaksins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satu-sehat-mapping-vaksin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_brng' => $model->kode_brng], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_brng',
            'vaksin_code',
            'vaksin_system',
            'vaksin_display',
            'route_code',
            'route_system',
            'route_display',
            'dose_quantity_code',
            'dose_quantity_system',
            'dose_quantity_unit',
        ],
    ]) ?>

</div>
