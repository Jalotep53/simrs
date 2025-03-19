<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakan $model */

$this->title = 'Create Template Persetujuan Penolakan Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Template Persetujuan Penolakan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-persetujuan-penolakan-tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
