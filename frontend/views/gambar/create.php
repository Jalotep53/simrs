<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Gambar $model */

$this->title = 'Create Gambar';
$this->params['breadcrumbs'][] = ['label' => 'Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gambar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
