<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Dapurbarang $model */

$this->title = 'Create Dapurbarang';
$this->params['breadcrumbs'][] = ['label' => 'Dapurbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapurbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
