<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdCekalDarah $model */

$this->title = 'Create Utd Cekal Darah';
$this->params['breadcrumbs'][] = ['label' => 'Utd Cekal Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-cekal-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
