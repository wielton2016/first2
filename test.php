                                                  <!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  <script src="/scripts/phy/dist/physicsjs-full.js"></script>
  <script src="/scripts/html2canvas/html2canvas.js"></script>
  </head>
  <body>
   <div id="container1">
  <div>
<button onclick="screan()">Click me</button></div>
  <div id="container">
<canvas id="myCanvas" width="1000" height="500"></canvas>  <br>
<canvas id="viewport" width="1000" height="500"></canvas> 
</div>
 </div>

<script> 
 
Physics(function(world){

  var viewWidth = 1000;
  var viewHeight = 300;

  var renderer = Physics.renderer('canvas', {
    el: 'viewport',
    width: viewWidth,
    height: viewHeight,
    meta: false, // don't display meta data
    styles: {
        // set colors for the circle bodies
        'circle' : {
            strokeStyle: '#351024',
            lineWidth: 1,
            fillStyle: '#d33682',
            angleIndicator: '#351024'
        }
    }
  });

  // add the renderer
  world.add( renderer );
  // render on each step
  world.on('step', function(){
    world.render();
     renderer.drawLine(circle1.state.pos, circle2.state.pos, 'rgba(200, 200, 200, 0.2)');
  });

  // bounds of the window
  var viewportBounds = Physics.aabb(0, 0, viewWidth, viewHeight);

  // constrain objects to these bounds
  world.add(Physics.behavior('edge-collision-detection', {
      aabb: viewportBounds,
      restitution: 0.99,
      cof: 0.99
      
  }));
     var rigidConstraints = Physics.behavior('verlet-constraints', {
        iterations: 3
    });
  // add a circle
var circle1=
      Physics.body('circle', {
        x: 0, // x-coordinate
        y: 200, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        mass: 100,
        radius: 20
      });
var circle2=
      Physics.body('circle', {
        x: 0, // x-coordinate
        y: 100, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: 20
      });
  world.add(circle1);
    world.add(circle2);
                  rigidConstraints.distanceConstraint(circle1, circle2, 0.7);
                  world.add( rigidConstraints );
                  

    

     var sila=0.1100;
  var l = 200;
    var circles = [];
    while( l-- ){
        var col1= Math.floor(Math.random()*255);
    var col2= Math.floor(Math.random()*255);
    var col3= Math.floor(Math.random()*255);
    
        circles.push(Physics.body('circle', {
        x: Math.random() * viewWidth/2, // x-coordinate
        y: Math.random() * 500, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: Math.random() * 20 ,
        styles: {fillStyle:  "rgba("+ col1 +", "+ col2 +", "+ col3 +", 0.9)",
        strokeStyle: '#351024',
            lineWidth: 1,
           // angleIndicator: '#351024'
            }
        }));
    }

    world.add(circles);
  // ensure objects bounce when edge collision is detected
  
  var squares = [];
    for ( var i = 0, l = 24; i < l; ++i ){

        squares.push( Physics.body('rectangle', {
            width: 40
            ,height: 40
            ,x: 42 * (i / 6 | 0) + viewWidth - 40 * 8
            ,y: 40 * (i % 6) + viewHeight - 40 * 6 + 15
            ,vx: 0
            ,cof: 0.99
            ,restitution: 0.99
            ,styles: {
                width: 40
                ,height: 40
            }
        }));
    }

    world.add( squares );
    
    
  
  world.add([
        Physics.behavior('interactive', { el: renderer.el })
        ,Physics.behavior('constant-acceleration')
        ,Physics.behavior('body-impulse-response')
        ,Physics.behavior('body-collision-detection')
        ,Physics.behavior('sweep-prune')
       // ,edgeBounce
    ]);
  // add some gravity
var gravity = Physics.behavior('constant-acceleration', {
    acc: { x : 0, y: 0.0004 } // this is the default
});
world.add( gravity );
 
  // subscribe to ticker to advance the simulation
  Physics.util.ticker.on(function( time, dt ){

      world.step( time );
  });
//zwieksz(world,sila);
  // start the ticker
  Physics.util.ticker.start();
//window.setTimeout(function(){gravity.setAcceleration({ x: 0, y: -0.0004 });window.setTimeout(function(){gravity.setAcceleration({ x: -0.0004, y: 0 })}, 5000);}, 5000);

});

 //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
var mainCanvas = document.querySelector("#myCanvas");
var mainContext = mainCanvas.getContext("2d");
 
var canvasWidth = mainCanvas.width;
var canvasHeight = mainCanvas.height;
var angle = 0;
 var requestAnimationFrame = window.requestAnimationFrame || 
                            window.mozRequestAnimationFrame || 
                            window.webkitRequestAnimationFrame || 
                            window.msRequestAnimationFrame;
                            
                               // color in the background
  mainContext.fillStyle = "#EEEEEE";
    mainContext.fillRect(0, 0, canvasWidth, canvasHeight);
drawCircle();



function drawCircle() {
   // mainContext.clearRect(0, 0, canvasWidth, canvasHeight);
         
 
  
     
    // draw the circle
    mainContext.beginPath();
     
   var radius = 5 + 15 * Math.abs(Math.cos(angle));
    mainContext.arc(Math.random() * 1000, Math.random() * 500, radius, 0, Math.PI * 2, false);
    mainContext.closePath();
     
    // color in the circle
    var col1= Math.floor(Math.random()*255);
    var col2= Math.floor(Math.random()*255);
    var col3= Math.floor(Math.random()*255);
    //alert(col1);
    mainContext.fillStyle = "rgba("+ col1 +", "+ col2 +", "+ col3 +", 0.1)";
    mainContext.fill();
    
    angle += Math.PI / 64/5;
   // requestAnimationFrame();
    window.setTimeout(drawCircle, 1000 / 1000);
}

function zwieksz(world,sila){
       world.add([
Physics.behavior('body-collision-detection')
    ,Physics.behavior('sweep-prune')
    ,Physics.behavior('newtonian', { strength: sila+1 })
    ]);
 
// window.setTimeout(zwieksz(world,sila), 1000000);
}
   function screan(){
  html2canvas(document.body, {
  onrendered: function(canvas) {
    document.body.appendChild(canvas);
    var img = canvas.toDataURL()  
    //window.open(img); 
    
    
     
    Physics(function(world){

  var viewWidth = 1000;
  var viewHeight = 300;

  var renderer = Physics.renderer('canvas', {
    el: 'viewport',
    width: viewWidth,
    height: viewHeight,
    meta: false, // don't display meta data
    styles: {
        // set colors for the circle bodies
        'circle' : {
            strokeStyle: '#351024',
            lineWidth: 1,
            fillStyle: '#d33682',
            angleIndicator: '#351024'
        }
    }
  });

  // add the renderer
  world.add( renderer );
  // render on each step
  world.on('step', function(){
    world.render();
     renderer.drawLine(circle1.state.pos, circle2.state.pos, 'rgba(200, 200, 200, 0.2)');
  });

  // bounds of the window
  var viewportBounds = Physics.aabb(0, 0, viewWidth, viewHeight);

  // constrain objects to these bounds
  world.add(Physics.behavior('edge-collision-detection', {
      aabb: viewportBounds,
      restitution: 0.99,
      cof: 0.99
      
  }));
     var rigidConstraints = Physics.behavior('verlet-constraints', {
        iterations: 3
    });
  // add a circle
var circle1=
      Physics.body('circle', {
        x: 0, // x-coordinate
        y: 200, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        mass: 100,
        radius: 20
      });
var circle2=
      Physics.body('circle', {
        x: 0, // x-coordinate
        y: 100, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: 20
      });
  world.add(circle1);
    world.add(circle2);
                  rigidConstraints.distanceConstraint(circle1, circle2, 0.7);
                  world.add( rigidConstraints );
                  

    


  // ensure objects bounce when edge collision is detected
  
  var squares = [];
    for ( var i = 0, l = 24; i < l; ++i ){

        squares.push( Physics.body('rectangle', {
            width: 40
            ,height: 40
            ,x: 42 * (i / 6 | 0) + viewWidth - 40 * 8
            ,y: 40 * (i % 6) + viewHeight - 40 * 6 + 15
            ,vx: 0
            ,cof: 0.99
            ,restitution: 0.99
            ,styles: {
                width: 40
                ,height: 40
            }
        }));
    }

    world.add( squares );
    
    
  
  world.add([
        Physics.behavior('interactive', { el: renderer.el })
        ,Physics.behavior('constant-acceleration')
        ,Physics.behavior('body-impulse-response')
        ,Physics.behavior('body-collision-detection')
        ,Physics.behavior('sweep-prune')
       // ,edgeBounce
    ]);
  // add some gravity
var gravity = Physics.behavior('constant-acceleration', {
    acc: { x : 0, y: 0.0004 } // this is the default
});
world.add( gravity );
 
  // subscribe to ticker to advance the simulation
  Physics.util.ticker.on(function( time, dt ){

      world.step( time );
  });
//zwieksz(world,sila);
  // start the ticker
  Physics.util.ticker.start();
//window.setTimeout(function(){gravity.setAcceleration({ x: 0, y: -0.0004 });window.setTimeout(function(){gravity.setAcceleration({ x: -0.0004, y: 0 })}, 5000);}, 5000);

});
  }
});
document.getElementById("container1").innerHTML="<div id='container2'><div><button onclick='screan()'>Click me</button></div><div id='container'><canvas id='viewport1' width='1000' height='500'></canvas></div></div>";

      }
</script> 


  </body>
</html>
