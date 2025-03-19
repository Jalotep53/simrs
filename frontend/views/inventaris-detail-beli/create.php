<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisDetailBeli $model */

$this->title = 'Create Inventaris Detail Beli';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris Detail Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-detail-beli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
