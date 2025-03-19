<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkorAldrettePascaAnestesi $model */

$this->title = 'Create Skor Aldrette Pasca Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Skor Aldrette Pasca Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skor-aldrette-pasca-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
