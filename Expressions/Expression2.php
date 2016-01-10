<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="quantity=1;cost=5">
    <p>Total in dollar: <span ng-bind="quantity * cost"></span></p>
</div>


<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Expression2</h2>

    <p>
        Same example using ng-bind

    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body><div ng-app="" ng-init="quantity=1;cost=5">
    <p>Total in dollar: <span ng-bind="quantity * cost"></span></p>
</div></body>')?>
    </p>
</div>

</body>
</html>
