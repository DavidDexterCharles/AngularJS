<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="firstName='John';lastName='Doe'">

    <p>The full name is: {{ firstName + " " + lastName }}</p>

</div>



<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Expression3</h2>

    <p>
        AngularJS strings are like JavaScript strings:

    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="firstName=\'John\';lastName=\'Doe\'">

<p>The full name is: {{ firstName + " " + lastName }}</p>

</div>

</body>')?>
    </p>

</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Alternative Using ng-bind: </h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="firstName=\'John\';lastName=\'Doe\'">

<p>The full name is: <span ng-bind="firstName + \' \' + lastName"></span></p>

</div>

</body>')?>
    </p>

</div>







</body>
</html>
