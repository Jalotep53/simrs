<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingObat $model */

$this->title = $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Mapping Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satu-sehat-mapping-obat-view">

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
            'obat_code',
            'obat_system',
            'obat_display',
            'form_code',
            'form_system',
            'form_display',
            'numerator_code',
            'numerator_system',
            'denominator_code',
            'denominator_system',
            'route_code',
            'route_system',
            'route_display',
        ],
    ]) ?>

</div>
