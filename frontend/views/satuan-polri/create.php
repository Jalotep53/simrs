<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuanPolri $model */

$this->title = 'Create Satuan Polri';
$this->params['breadcrumbs'][] = ['label' => 'Satuan Polris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satuan-polri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
