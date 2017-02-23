<?php

require('Bmi.php');
require('Form.php');

$bmiObject= new Bmi();
$form= new DWA\Form($_GET);

$weight = $form->sanitize($form->get('weight',$default=1));
$height = $form->sanitize($form->get('height',$default=1));
$age = $form->sanitize($form->get('age',$default=0));
$gender = $form->get('gender',$default='male');
$activity = $form->get('activity',$default='sedentary');
$calChecked= $form->isChosen('calories');

if ($form->isSubmitted()){
    $submitted=true;

    $errors = $form->validate(
    [
        'weight'=>'required|numeric',
        'height'=>'required|numeric',
        'age'=>'required|numeric',
        'activity'=>'required',
        'gender'=>'required'
    ]
    );

    $bmi=$bmiObject->bmiCal($weight,$height);

    if($calChecked){
        $calories=$bmiObject->caloriesCal($weight, $height,$gender,$age,$activity);
    }
}
