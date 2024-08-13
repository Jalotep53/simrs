<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Poliklinik $model */

$this->title = $model->kd_poli;
$this->params['breadcrumbs'][] = ['label' => 'Polikliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="poliklinik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_poli' => $model->kd_poli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_poli' => $model->kd_poli], [
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
            'kd_poli',
            'nm_poli',
            'registrasi',
            'registrasilama',
            'status',
        ],
    ]) ?>

</div>
