<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenguranganBiaya $model */

$this->title = 'Create Pengurangan Biaya';
$this->params['breadcrumbs'][] = ['label' => 'Pengurangan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengurangan-biaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
