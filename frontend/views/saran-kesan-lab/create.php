<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SaranKesanLab $model */

$this->title = 'Create Saran Kesan Lab';
$this->params['breadcrumbs'][] = ['label' => 'Saran Kesan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saran-kesan-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
