<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="quantity=1;cost=5">
    <p>Total in dollar: {{ quantity * cost }}</p>
</div>


<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Expression1</h2>

    <p>AngularJS Expressions
        AngularJS expressions are written inside double braces: {{ expression }}.

        AngularJS expressions binds data to HTML the same way as the ng-bind directive.

        AngularJS will "output" data exactly where the expression is written.

        AngularJS expressions are much like JavaScript expressions: They can contain literals, operators, and variables.

        Example {{ 5 + 5 }} or {{ firstName + " " + lastName }}
        If you remove the ng-app directive, HTML will display the expression as it is, without solving it
    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('

<body>

<div ng-app="" ng-init="quantity=1;cost=5">
    <p>Total in dollar: {{ quantity * cost }}</p>
</div></body>')?>
    </p>
</div>

</body>
</html>
