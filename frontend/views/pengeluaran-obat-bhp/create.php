<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranObatBhp $model */

$this->title = 'Create Pengeluaran Obat Bhp';
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-obat-bhp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
