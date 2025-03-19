<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualanperbarang $model */

$this->title = 'Create Setpenjualanperbarang';
$this->params['breadcrumbs'][] = ['label' => 'Setpenjualanperbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setpenjualanperbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
