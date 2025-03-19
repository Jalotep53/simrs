<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopiutang $model */

$this->title = $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Tokopiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tokopiutang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nota_piutang' => $model->nota_piutang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nota_piutang' => $model->nota_piutang], [
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
            'nota_piutang',
            'tgl_piutang',
            'nip',
            'no_member',
            'nm_member',
            'catatan',
            'jns_jual',
            'ongkir',
            'uangmuka',
            'sisapiutang',
            'tgltempo',
        ],
    ]) ?>

</div>
