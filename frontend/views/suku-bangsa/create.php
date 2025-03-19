<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SukuBangsa $model */

$this->title = 'Create Suku Bangsa';
$this->params['breadcrumbs'][] = ['label' => 'Suku Bangsas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suku-bangsa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
