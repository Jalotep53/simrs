<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsTaskid $model */

$this->title = 'Create Referensi Mobilejkn Bpjs Taskid';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Mobilejkn Bpjs Taskids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-mobilejkn-bpjs-taskid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
