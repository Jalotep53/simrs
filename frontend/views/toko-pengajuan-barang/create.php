<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TokoPengajuanBarang $model */

$this->title = 'Create Toko Pengajuan Barang';
$this->params['breadcrumbs'][] = ['label' => 'Toko Pengajuan Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toko-pengajuan-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
