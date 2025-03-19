<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkorBromagePascaAnestesi $model */

$this->title = 'Create Skor Bromage Pasca Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Skor Bromage Pasca Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-bromage-pasca-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
