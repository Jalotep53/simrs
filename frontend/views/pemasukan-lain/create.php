<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemasukanLain $model */

$this->title = 'Create Pemasukan Lain';
$this->params['breadcrumbs'][] = ['label' => 'Pemasukan Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-lain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
