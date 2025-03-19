<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\NotaInap $model */

$this->title = 'Create Nota Inap';
$this->params['breadcrumbs'][] = ['label' => 'Nota Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nota-inap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
