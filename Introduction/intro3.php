<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div data-ng-app="" data-ng-init="firstName='John'">

    <p>The name is <span data-ng-bind="firstName"></span></p>

</div>


<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Intro3</h2>

    <p>
        AngularJS Directives
        As you have already seen, AngularJS directives are HTML attributes with an ng prefix.

        The ng-init directive initialize AngularJS application variables.
    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('<body>

<div data-ng-app="" data-ng-init="firstName=\'John\'">

<p>The name is <span data-ng-bind="firstName"></span></p>

</div>

</body>')?>
    </p>
</div>

</body>
</html>
