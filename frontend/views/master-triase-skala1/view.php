<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala1 $model */

$this->title = $model->kode_skala1;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Skala1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-triase-skala1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_skala1' => $model->kode_skala1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_skala1' => $model->kode_skala1], [
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
            'kode_skala1',
            'pengkajian_skala1',
        ],
    ]) ?>

</div>
