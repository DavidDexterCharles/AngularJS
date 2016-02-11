app.controller('GameCtrl',['$scope', '$interval', '$firebaseArray', '$firebaseObject', function($scope, $interval, $firebaseArray, $firebaseObject){

	$scope.allies = {};

	$firebaseObject(new Firebase("https://angularintro.firebaseio.com/game")).$bindTo($scope, "game");

	$scope.title = 'Health';

	$scope.username = "";

	$scope.min = 0;
	$scope.max = 1000;
	$scope.gaugeColor = 'grey';
	$scope.levelColors = ['#00FFF2', '#668C54', '#FFAF2E', '#FF2EF1'];
	$scope.customSectors = [
		{
			color: "#ff0000",
			lo: 0,
			hi: 750
		},
		{
			color: "#00ff00",
			lo: 750,
			hi: 1000
		},
		{
			color: "#0000ff",
			lo: 1000,
			hi: 1337
		}
	];
	$scope.labelFontColor = 'green';
	$scope.startAnimationTime = 0;
	$scope.donutAngle = 90;

	$scope.result = "TIE";

	$scope.gameState = "fled";

	$scope.count = 0;

	$scope.power = 10;

	$scope.regen = 10;

	$scope.timer = 10;

	$scope.host = null;

	$scope.started = false;

	$scope.combo = false;

	$scope.enemyChoice = null;

	var promise;

	$scope.startGame = function() {
		$scope.host = true;
		$scope.gameState = 'play';

		var fb = new Firebase('"https://angularintro.firebaseio.com/game/players');
		fb.remove(function(){
			$scope.game.isPlaying = true;
			$scope.game.currentAlly = $scope.username;
		});
		$scope.allies = $firebaseArray(new Firebase("https://angularintro.firebaseio.com/game/players"));
		$scope.allies.$add({
			name:$scope.username
		});

		$scope.started = true;
		$scope.start();
	};

	$scope.start = function(){
		// stops any running interval to avoid two intervals running at the same time
		$scope.stop();
		// store the interval promise
		promise = $interval(function(){
			$scope.timer--;
		}, 1100);

	};

	$scope.joinGame = function(){
		$scope.host = false;
		$scope.allies = $firebaseArray(new Firebase("https://angularintro.firebaseio.com/game/players"));
		$scope.allies.$add({
			name:$scope.username
		});
		$scope.started = true;
	};

	$scope.$watch('timer',function(newValue, oldValue){
		if(newValue == 0){
			$scope.stop();
			$scope.timer = 10;
			$scope.gameState = 'fled';
			if($scope.host){
				$scope.count++;
				console.log($scope.allies[$scope.count%$scope.allies.length].name);
				console.log($scope.username);
				console.log(($scope.allies[$scope.count%$scope.allies.length].name == $scope.username));
				if($scope.allies[$scope.count%$scope.allies.length].name == $scope.username){
					$scope.game.currentAlly=$scope.allies[$scope.count%$scope.allies.length].name;
					console.log($scope.game.currentAlly);
					$scope.gameState = 'play';
					$scope.start();
				}else{
					$scope.game.currentAlly=$scope.allies[$scope.count%$scope.allies.length].name;
					$scope.start();
				}
			}
		}
	});

	$scope.$watch('game.currentAlly', function(newValue, oldValue){
		if(newValue == $scope.username){
			$scope.gameState = 'play';
			$scope.start();
		}else{
			$scope.gameState= 'fled';
		}
	});

	// stops the interval
	$scope.stop = function() {
		$interval.cancel(promise);
	};

	$scope.endGame = function(){
		$scope.stop();
		$scope.timer =10;
		$scope.gameState = 'end';
		$scope.game.health = 1000;
		$scope.game.isPlaying = false;
		$scope.game.currentAlly = "No One";
	};

	$scope.match = function(x, y){
		if(x == y)return 0;
		if((x==1 && y==2) || (x==2 && y==3) || (x==3 && y==1))return 1;
		if((y==1 && x==2) || (y==2 && x==3) || (y==3 && x==1))return 2;
	};

	$scope.time = 10;

	$scope.choose = function(choice){
		$scope.enemyChoice = Math.round(Math.random()*2) + 1;

		if($scope.gameState == 'play'){
			switch($scope.match(choice, $scope.enemyChoice)){
				case 0:
					$scope.result ="TIE";
					break;
				case 1:
					if($scope.game.health-$scope.power > 0)$scope.game.health-=$scope.power;
					else {
						$scope.stop();
						$scope.gameState = 'win';
					}
					if($scope.combo)$scope.power*=2;
					$scope.regen=10;
					$scope.combo=true;
					$scope.result = "SUCCESS";
					break;
				case 2:
					if($scope.game.health+$scope.regen < 1000)$scope.game.health+=$scope.regen;
					else $scope.game.health = 1000;
					if(!$scope.combo)$scope.regen*=2;
					$scope.power=10;
					$scope.combo=false;
					$scope.result="FAILURE";
					break;
			}
		}
	};



}]);
