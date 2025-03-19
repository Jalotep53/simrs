<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarObat $model */

$this->title = $model->no_resep;
$this->params['breadcrumbs'][] = ['label' => 'Resep Luar Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resep-luar-obat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_resep' => $model->no_resep, 'kode_brng' => $model->kode_brng], [
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
            'no_resep',
            'kode_brng',
            'jml',
            'aturan_pakai',
        ],
    ]) ?>

</div>
