<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailhibahObatBhp $model */

$this->title = 'Create Detailhibah Obat Bhp';
$this->params['breadcrumbs'][] = ['label' => 'Detailhibah Obat Bhps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailhibah-obat-bhp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
