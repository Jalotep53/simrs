<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranHarian $model */

$this->title = 'Create Pengeluaran Harian';
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
