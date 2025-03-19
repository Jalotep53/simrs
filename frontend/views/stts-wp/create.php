<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SttsWp $model */

$this->title = 'Create Stts Wp';
$this->params['breadcrumbs'][] = ['label' => 'Stts Wps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stts-wp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
