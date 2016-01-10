<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'}">

    <p>The name is {{ person.lastName }}</p>

</div>


<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Expression4</h2>

    <p>
        AngularJS objects are like JavaScript objects:

    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="person={firstName:\'John\',lastName:\'Doe\'}">

    <p>The name is {{ person.lastName }}</p>

</div>
</body>')?>
    </p>

</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Alternative Using ng-bind: </h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="person={firstName:\'John\',lastName:\'Doe\'}">

<p>The name is <span ng-bind="person.lastName"></span></p>

</div>

</body>')?>
    </p>

</div>






</body>
</html>
