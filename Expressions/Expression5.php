<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="points=[1,15,19,2,40]">

    <p>The third result is {{ points[2] }}</p>

</div>

<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Expression5</h2>

    <p>
        AngularJS arrays are like JavaScript arrays:

    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="points=[1,15,19,2,40]">

<p>The third result is {{ points[2] }}</p>

</div>

</body>')?>
    </p>

</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Alternative Using ng-bind: </h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body>

<div ng-app="" ng-init="points=[1,15,19,2,40]">

<p>The third result is <span ng-bind="points[2]"></span></p>

</div>

</body>')?>
    </p>

</div>

</body>
</html>