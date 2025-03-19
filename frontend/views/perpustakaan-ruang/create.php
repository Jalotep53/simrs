<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanRuang $model */

$this->title = 'Create Perpustakaan Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Perpustakaan Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
