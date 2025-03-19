<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRalan $model */

$this->title = 'Create Set Harga Obat Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Set Harga Obat Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-obat-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
