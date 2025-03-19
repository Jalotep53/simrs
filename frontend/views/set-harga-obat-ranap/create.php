<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRanap $model */

$this->title = 'Create Set Harga Obat Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Obat Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-obat-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
