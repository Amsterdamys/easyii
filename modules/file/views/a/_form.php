<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['enctype' => 'multipart/form-data']
]); ?>
<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'file')->fileInput() ?>
<?php if(!$model->isNewRecord) : ?>
    <div><a href="<?= $model->file ?>" target="_blank"><?= basename($model->file) ?></a> (<?= Yii::$app->formatter->asShortSize($model->size, 2) ?>)</div>
    <br>
<?php endif; ?>
<?= (IS_ROOT) ? $form->field($model, 'slug') : '' ?>
<?= Html::submitButton(Yii::t('easyii', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>