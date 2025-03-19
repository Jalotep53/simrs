<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawat $model */

$this->title = 'Create Inhealth Jenpel Ruang Rawat';
$this->params['breadcrumbs'][] = ['label' => 'Inhealth Jenpel Ruang Rawats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inhealth-jenpel-ruang-rawat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
