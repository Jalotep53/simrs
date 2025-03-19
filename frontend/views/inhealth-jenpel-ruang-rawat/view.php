<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawat $model */

$this->title = $model->kd_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Jenpel Ruang Rawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inhealth-jenpel-ruang-rawat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_kamar' => $model->kd_kamar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_kamar' => $model->kd_kamar], [
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
            'kd_kamar',
            'kode_jenpel_ruang_rawat',
            'nama_jenpel_ruang_rawat',
            'tarif',
        ],
    ]) ?>

</div>
