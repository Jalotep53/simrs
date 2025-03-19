<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPengeluaranHarian $model */

$this->title = 'Create Kategori Pengeluaran Harian';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pengeluaran-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
