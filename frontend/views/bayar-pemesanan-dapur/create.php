<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananDapur $model */

$this->title = 'Create Bayar Pemesanan Dapur';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Pemesanan Dapurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-pemesanan-dapur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
