<?php

require("header.php");

?>

<h1>Tools</h1>
<hr />

<h4>Add two numbers</h4>
<p class="lead">This form adds two numbers together.</p>
<form action="/tools.php" action="get">
    <div class="row mb-2">
        <div class="col-md-6">    
            <div class="form-group">
                <label for="number_1">Number 1</label>
                <input name="number_1" value="<?=$_GET['number_1']?>" class="form-control" placeholder="Enter the first number." />
            </div>
        </div>
        <div class="col-md-6">    
            <div class="form-group">
                <label for="number_2">Number 2</label>
                <input name="number_2" value="<?=$_GET['number_2']?>" class="form-control" placeholder="Enter the second number." />
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-secondary" type="submit">Add</button>
        </div>
    </div>
</form>

<div class="card card-body bg-light">
    Result: 
        <?php
        $result=$_GET['number_1'] + $_GET['number_2'];
        echo $result;
        ?>
</div>
<hr />

<h4>Divide two numbers</h4>
 
<form action="/tools.php" action="get">
    <div class="row mb-2">
        <div class="col-md-6">    
            <div class="form-group">
                <label for="numerator">Numerator</label>
                <input name="numerator" value="<?=$_GET['numerator']?>" class="form-control" placeholder="Enter the numerator." />
            </div>
        </div>
        <div class="col-md-6">    
            <div class="form-group">
                <label for="denominator">Denominator</label>
                <input name="denominator" value="<?=$_GET['denominator']?>" class="form-control" placeholder="Enter the denominator." />
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-secondary" type="submit">Divide</button>
        </div>
    </div>
</form>

<div class="card card-body bg-light">
    Result: 
        <?php
        $denominator = $_GET['denominator'];
        $result = 0;

        if($denominator > 0) {
            $result=$_GET['numerator'] / $denominator;
        }

        echo $result;
        ?>
</div>

<?php


require("footer.php");
  

?>