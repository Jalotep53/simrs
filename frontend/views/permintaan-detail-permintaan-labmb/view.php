<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLabmb $model */

$this->title = $model->noorder;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Detail Permintaan Labmbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permintaan-detail-permintaan-labmb-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'noorder' => $model->noorder, 'kd_jenis_prw' => $model->kd_jenis_prw, 'id_template' => $model->id_template], [
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
            'noorder',
            'kd_jenis_prw',
            'id_template',
            'stts_bayar',
        ],
    ]) ?>

</div>
