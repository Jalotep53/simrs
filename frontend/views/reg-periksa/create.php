<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RegPeriksa $model */

$this->title = 'Create Reg Periksa';
$this->params['breadcrumbs'][] = ['label' => 'Reg Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-periksa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
