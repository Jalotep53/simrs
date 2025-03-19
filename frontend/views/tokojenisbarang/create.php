<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tokojenisbarang $model */

$this->title = 'Create Tokojenisbarang';
$this->params['breadcrumbs'][] = ['label' => 'Tokojenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokojenisbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
