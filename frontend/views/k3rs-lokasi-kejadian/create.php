<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsLokasiKejadian $model */

$this->title = 'Create K3rs Lokasi Kejadian';
$this->params['breadcrumbs'][] = ['label' => 'K3rs Lokasi Kejadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="k3rs-lokasi-kejadian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
