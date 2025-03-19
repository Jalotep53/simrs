<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\EvaluasiKinerja $model */

$this->title = $model->kode_evaluasi;
$this->params['breadcrumbs'][] = ['label' => 'Evaluasi Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="evaluasi-kinerja-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_evaluasi' => $model->kode_evaluasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_evaluasi' => $model->kode_evaluasi], [
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
            'kode_evaluasi',
            'nama_evaluasi',
            'indek',
        ],
    ]) ?>

</div>
