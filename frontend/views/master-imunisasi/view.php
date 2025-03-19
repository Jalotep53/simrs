<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterImunisasi $model */

$this->title = $model->kode_imunisasi;
$this->params['breadcrumbs'][] = ['label' => 'Master Imunisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-imunisasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kode_imunisasi' => $model->kode_imunisasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kode_imunisasi' => $model->kode_imunisasi], [
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
            'kode_imunisasi',
            'nama_imunisasi',
        ],
    ]) ?>

</div>
