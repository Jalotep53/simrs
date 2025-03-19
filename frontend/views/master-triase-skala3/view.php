<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala3 $model */

$this->title = $model->kode_skala3;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-triase-skala3-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_skala3' => $model->kode_skala3], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_skala3' => $model->kode_skala3], [
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
            'kode_pemeriksaan',
            'kode_skala3',
            'pengkajian_skala3',
        ],
    ]) ?>

</div>
