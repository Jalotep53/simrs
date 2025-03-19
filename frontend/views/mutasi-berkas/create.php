<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MutasiBerkas $model */

$this->title = 'Create Mutasi Berkas';
$this->params['breadcrumbs'][] = ['label' => 'Mutasi Berkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mutasi-berkas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
