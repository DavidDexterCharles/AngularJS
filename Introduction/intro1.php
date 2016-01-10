
<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

    <div ng-app="">

        <p>Input something in the input box:</p>
        <p>Name: <input type="text" ng-model="name"></p>
        <p ng-bind="name"></p>

    </div>


    <br><br><br><br>
    <div style="background-color:black; color:white; padding:20px;">

        <h2>Intro1</h2>

        <p>
            AngularJS is a JavaScript framework. It can be added to an HTML page with a <?php echo htmlspecialchars('<script>')?> tag.
            AngularJS extends HTML attributes with Directives, and binds data to HTML with Expressions.
        </p>
    </div>
    <div style="background-color:seagreen; color:white; padding:20px;">

        <h2>Code</h2>

        <p style="color:yellow;">
           <?php echo htmlspecialchars('
        <div ng-app="">
             <p>Input something in the input box:</p>
             <p>Name: <input type="text" ng-model="name"></p>
            <p ng-bind="name"></p>

    </div>')?>
        </p>
    </div>
</body>
</html>