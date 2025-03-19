<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseMacamKasus $model */

$this->title = $model->kode_kasus;
$this->params['breadcrumbs'][] = ['label' => 'Master Triase Macam Kasuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-triase-macam-kasus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_kasus' => $model->kode_kasus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_kasus' => $model->kode_kasus], [
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
            'kode_kasus',
            'macam_kasus',
        ],
    ]) ?>

</div>
