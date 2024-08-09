<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Gudangbarang $model */

$this->title = 'Create Gudangbarang';
$this->params['breadcrumbs'][] = ['label' => 'Gudangbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gudangbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
