<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdKomponenDarah $model */

$this->title = 'Create Utd Komponen Darah';
$this->params['breadcrumbs'][] = ['label' => 'Utd Komponen Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-komponen-darah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
