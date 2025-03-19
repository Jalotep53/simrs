<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tindakan $model */

$this->title = $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tgl' => $model->tgl, 'id' => $model->id, 'tnd' => $model->tnd, 'nm_pasien' => $model->nm_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tgl' => $model->tgl, 'id' => $model->id, 'tnd' => $model->tnd, 'nm_pasien' => $model->nm_pasien], [
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
            'tgl',
            'id',
            'tnd',
            'jm',
            'nm_pasien',
            'kamar',
            'diagnosa',
            'jmlh',
        ],
    ]) ?>

</div>
