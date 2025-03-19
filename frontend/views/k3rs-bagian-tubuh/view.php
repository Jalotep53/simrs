<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsBagianTubuh $model */

$this->title = $model->kode_bagian;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Bagian Tubuhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="k3rs-bagian-tubuh-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_bagian' => $model->kode_bagian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_bagian' => $model->kode_bagian], [
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
            'kode_bagian',
            'bagian_tubuh',
        ],
    ]) ?>

</div>
