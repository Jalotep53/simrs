<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInap $model */

$this->title = 'Create Kamar Inap';
$this->params['breadcrumbs'][] = ['label' => 'Kamar Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-inap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
