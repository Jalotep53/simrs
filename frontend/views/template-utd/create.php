<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtd $model */

$this->title = 'Create Template Utd';
$this->params['breadcrumbs'][] = ['label' => 'Template Utds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-utd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
