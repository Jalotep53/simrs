<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Poliklinik $model */

$this->title = 'Create Poliklinik';
$this->params['breadcrumbs'][] = ['label' => 'Polikliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
