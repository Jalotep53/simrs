<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationdispense $model */

$this->title = 'Create Satu Sehat Medicationdispense';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Medicationdispenses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-medicationdispense-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
