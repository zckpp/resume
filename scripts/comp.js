(function(){


angular.module('mainApp' ,[])
       .component('chart', {
		templateUrl: 'views/main.html',
		controller:  function ($scope){
			var $ctrl = this;

			$ctrl.achivement = 
			  { 
			    age: 280, 
			    code: 200,
			    hour: 240,
			    project: 220
			  };

			$ctrl.addup1 = function() {
			  $ctrl.achivement.age += 1;
			  updateSVG();		
			};

			$ctrl.addup2 = function() {
			  $ctrl.achivement.code += 1;
			  updateSVG();
			};

			$ctrl.addup3 = function() {
			  $ctrl.achivement.hour += 1;
			  updateSVG();
			};

			$ctrl.addup4 = function() {
			  $ctrl.achivement.project += 1;
			  updateSVG();
			};



			var Svg = function(){

				var data = $.map($ctrl.achivement, function(value, index) {
				  return [value];
				});

		
				var height = 420
				   ,barwidth = 20;

				var y = d3.scale.linear()
				    .range([height, 0]);

				y.domain([0, d3.max(data)]);

				var chart = d3.select(".chart")
				    .attr("width", barwidth * 60)
				    .attr("height", height)
			
				var bar = chart.selectAll("g")
				  .data(data)
				  .enter().append("g")
				  .attr("transform", function(d, i) { 
				  	return "translate(" + 15 * i * barwidth + ", 0)"; });

				bar.append("rect")
				  .attr("height", function(d,i) {
				  		return d;
				  })
				  .attr("width", barwidth - 1);
	
				  bar.transition();

				function type(d) {
				  d.value = +d.value; // coerce to number
				  return d;
				}

			}

			//update svg with new data
			function updateSVG(){
				var data = $.map($ctrl.achivement, function(value, index) {
    			  return [value];
				});

		
				var height = 420
				   ,barwidth = 20;

				var y = d3.scale.linear()
				    .range([height, 0]);

				y.domain([0, d3.max(data)]);

				var chart = d3.select(".chart")
				    .attr("width", barwidth * 60)
				    .attr("height", height)
			
				var bar = chart.selectAll("g")
				  .data(data)
				  .attr("transform", function(d, i) { 

				  	return "translate(" + 15 * i * barwidth + ", 0)"; });


				bar.append("rect")
				  .attr("height", function(d,i) {
				  		return d;
				  })
				  .attr("width", barwidth - 1);

			
				  bar.transition();

				function type(d) {
				  d.value = +d.value; // coerce to number
				  return d;
				}
			}
			Svg();

   		},
    });
})();
