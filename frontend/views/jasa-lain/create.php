<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\JasaLain $model */

$this->title = 'Create Jasa Lain';
$this->params['breadcrumbs'][] = ['label' => 'Jasa Lains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jasa-lain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
