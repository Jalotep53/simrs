<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOk $model */

$this->title = $model->kd_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obatbhp Oks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obatbhp-ok-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_obat' => $model->kd_obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_obat' => $model->kd_obat], [
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
            'kd_obat',
            'nm_obat',
            'kode_sat',
            'hargasatuan',
        ],
    ]) ?>

</div>
