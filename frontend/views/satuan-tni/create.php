<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuanTni $model */

$this->title = 'Create Satuan Tni';
$this->params['breadcrumbs'][] = ['label' => 'Satuan Tnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuan-tni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
