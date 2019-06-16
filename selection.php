<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fight4Fife</title>
    <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php include_once("questions.php"); ?>
    <nav class="navbar navbar-expand-lg navbar-light nav-custom">
        <a class="nav-link" href="index.php">Previous</a>
        <a class="nav-link ml-auto" href="planning.php">Next</a>
    </nav>
    <br>
    <img src="resources/img/planing401.png" style="width:70%; left:30%;" alt="planing">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 cate-container">
                <img src="resources/img/nutrition.png" alt="" class="choice-container">
                <div class="content-container">
                <ul>
                    <?php $ques = getQuestionsById(1);
                    foreach ($ques as $q) { ?>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    <?php } ?>
                </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="resources/img/fitness.png" alt="" class="choice-container">
                <div class="content-container">
                    <ul>
                    <?php
                        $ques = getQuestionsById(2); 
                            foreach ($ques as $q) {
                    ?>
                        <li>
                            <label class="checkbox-container"><strong cllass="overflow-wrap: break-word;"><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="resources/img/sleeping.png" alt="" class="choice-container">
                <div class="content-container">
                    <?php
                    $ques = getQuestionsById(3); 
                        foreach ($ques as $q) {
                    ?>    
                    <ul>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"]  ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                        <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="resources/img/productivity.png" alt="" class="choice-container">
                <div class="content-container">
                    <?php
                    $ques = getQuestionsById(4); 
                        foreach ($ques as $q) {
                    ?>    
                    <ul>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                        <?php } ?>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-3 offset-md-2 choice">
                <img src="resources/img/learning.png" alt="" class="choice-container">
                <div class="content-container">
                    <?php
                    $ques = getQuestionsById(5); 
                        foreach ($ques as $q) {
                    ?>    
                    <ul>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                        <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="resources/img/relationships.png" alt="" class="choice-container">
                <div class="content-container">
                    <?php
                    $ques = getQuestionsById(6); 
                        foreach ($ques as $q) {
                    ?>    
                    <ul>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                        <?php } ?>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="resources/img/money.png" alt="" class="choice-container">
                <div class="content-container">
                    <?php
                    $ques = getQuestionsById(7); 
                        foreach ($ques as $q) {
                    ?>    
                    <ul>
                        <li>
                            <label class="checkbox-container"><strong><?php echo $q["Question"] ?></strong>
                            <input type="checkbox" name="<?php echo '1-'.$q["QuestionId"]?>" <?php if ($q["Answer"]) echo "checked" ?>>
                            <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>