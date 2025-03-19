<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDendaHarian $model */

$this->title = 'Create Perpustakaan Bayar Denda Harian';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Bayar Denda Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-bayar-denda-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
