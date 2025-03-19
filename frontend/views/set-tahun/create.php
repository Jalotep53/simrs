<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetTahun $model */

$this->title = 'Create Set Tahun';
$this->params['breadcrumbs'][] = ['label' => 'Set Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tahun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
