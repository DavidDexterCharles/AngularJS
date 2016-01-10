<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="firstName='John'">

    <p>The name is <span ng-bind="firstName"></span></p>

</div>

<br><br><br><br>
<div style="background-color:black; color:white; padding:20px;">

    <h2>Intro2</h2>

    <p>
        AngularJS Extends HTML
        AngularJS extends HTML with ng-directives.
        The ng-app directive defines an AngularJS application.
        The ng-model directive binds the value of HTML controls (input, select, textarea) to application data.
        The ng-bind directive binds application data to the HTML view.
        Example explained:
        AngularJS starts automatically when the web page has loaded.
        The ng-app directive tells AngularJS that the <?php echo htmlspecialchars(' <div>')?> element is the "owner" of an AngularJS application.
            The ng-model directive binds the value of the input field to the application variable name.
            The ng-bind directive binds the innerHTML of the <?php echo htmlspecialchars('<p>') ?> element to the application variable name.


    </p>
</div>
<div style="background-color:seagreen; color:white; padding:20px;">

    <h2>Code</h2>

    <p style="color:yellow;">
        <?php echo htmlspecialchars('
        <body><div ng-app="" ng-init="firstName=\'John\'">

    <p>The name is <span ng-bind="firstName"></span></p>

</div></body>')?>
    </p>
</div>

</body>
</html>

