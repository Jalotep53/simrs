<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailBeriDiet $model */

$this->title = 'Create Detail Beri Diet';
$this->params['breadcrumbs'][] = ['label' => 'Detail Beri Diets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-beri-diet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
