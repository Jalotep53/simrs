<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsTaskid $model */

$this->title = 'Update Referensi Mobilejkn Bpjs Taskid: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Mobilejkn Bpjs Taskids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'taskid' => $model->taskid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-mobilejkn-bpjs-taskid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
