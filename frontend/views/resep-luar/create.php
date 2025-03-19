<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuar $model */

$this->title = 'Create Resep Luar';
$this->params['breadcrumbs'][] = ['label' => 'Resep Luars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
