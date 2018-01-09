                                                  <!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <title></title>
  <script src="/scripts/phy/dist/physicsjs-full.js"></script>
  <script src="/scripts/html2canvas/html2canvas.js"></script>
  </head>
  <body>


  <div id="container">
 <br>
<canvas  id="viewport" style="border-style: dashed;" width="1000" height="1500"></canvas>   
</div>
 </div>

<script> 
 
Physics(function (world) {
    //alert(window.innerWidth);
  var viewWidth = 1000;
  var viewHeight = 500;
    // bounds of the window

    var viewportBounds = Physics.aabb(0, 0, window.innerWidth, window.innerHeight*0.9)
        ,edgeBounce
        ,renderer
        ;

    // create a renderer
    renderer = Physics.renderer('canvas', {
        el: 'viewport',
        width: window.innerWidth*0.98,
    height: window.innerHeight*0.9,
        autoResize : false  // bardzo wazne        
    });

    // add the renderer
    world.add(renderer);
    // render on each step
    world.on('step', function () {
        world.render();
    });

    // constrain objects to these bounds
    edgeBounce = Physics.behavior('edge-collision-detection', {
        aabb: viewportBounds
        ,restitution: 0.2
        ,cof: 0.8
    });

    // resize events
    window.addEventListener('resize', function () {

        // as of 0.7.0 the renderer will auto resize... so we just take the values from the renderer
        viewportBounds = Physics.aabb(0, 0, renderer.width, renderer.height);
        // update the boundaries
        edgeBounce.setAABB(viewportBounds);

    }, true);

    // some fun colors
    var colors = [
        '#b58900',
        '#cb4b16',
        '#dc322f',
        '#d33682',
        '#6c71c4',
        '#268bd2',
        '#2aa198',
        '#859900'
    ];

    // for constraints
    var rigidConstraints = Physics.behavior('verlet-constraints', {
        iterations: 3
    });

    // the "fruitcake"
    var spacing = window.innerWidth/50;
    var fruitcake = [];
    for ( var row = 0, l = 8; row < l; ++row ){
       
        for ( var col = 0, lcol = 11; col < lcol; ++col ){
              
            var r =spacing/4; // (Math.random() * 10 + 10)|0;

            if ( row === 0 ||
                col === 0 ||
                row === l - 1 ||
                col === lcol - 1
               ){
                r = spacing/5;
            }

            if ( (row === l - 1) &&
                (col === 2 || col === lcol - 3)
               ){
                r = spacing*1.2;
            }
              if(row>=5 || col<5){ }else{
              r=0;
              }

            fruitcake.push(
                Physics.body('circle', {
                    x: spacing * col + renderer.width / 2 - 100
                    ,y: spacing * row + renderer.height*0.69
                    ,radius: r
                    ,restitution: 0.9
                    ,mass: 200
                    ,styles: {
                        fillStyle: colors[ fruitcake.length % colors.length ]
                        ,angleIndicator: r === 30 ? 'rgba(0,0,0,0.6)' : false
                    }
                })
            );

            if ((col < 5 && row<5 && col>0) || (row >= 5 && col>=5) || (row >= 5 && col<5 && col>0)){
                // horizontal
                rigidConstraints.distanceConstraint(fruitcake[ lcol * row + col - 1 ], fruitcake[ lcol * row + col ],.2);
            }

            if (row > 0 && col<5 || row > 5 && col>=5){

                // vertical
                rigidConstraints.distanceConstraint(fruitcake[ lcol * row + col ], fruitcake[ lcol * (row - 1) + col ], .2);
                if ( col > 0){
                    // diagonals
                    rigidConstraints.distanceConstraint(fruitcake[ lcol * (row - 1) + col - 1 ], fruitcake[ lcol * row + col ], 2, Math.sqrt(2) * spacing);
                    rigidConstraints.distanceConstraint(fruitcake[ lcol * (row - 1) + col ], fruitcake[ lcol * row + col - 1 ], 2, Math.sqrt(2) * spacing);
                }
            }
        } 
        
    }

    // render
    
    world.on('render', function( data ){

        var constraints = rigidConstraints.getConstraints().distanceConstraints
            ,c
            ;
             
        for ( var i = 0, l = constraints.length; i < l; ++i ){

            c = constraints[ i ];
            
            renderer.drawLine(c.bodyA.state.pos, c.bodyB.state.pos, 'rgba(200, 200, 200, 0.2)');
        }
    });

    // add things to world
    world.add( fruitcake );
    world.add( rigidConstraints );
   // trailer<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< 
    var circle1=
      Physics.body('circle', {
    x: renderer.width / 2+renderer.width/3, // x-coordinate
        y: renderer.height *0.65, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: spacing/8
      });
var circle2=
      Physics.body('circle', {
        x: renderer.width / 2, // x-coordinate
        y: renderer.height *0.65, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: spacing/8
      });
    
        var circle3=
      Physics.body('circle', {
    x: renderer.width / 2+renderer.width/3, // x-coordinate
        y: renderer.height *0.75, // y-coordinate
        vx: -0.02, // velocity in x-direction
        vy: -0.01, // velocity in y-direction
        radius: spacing*1.2 
      });
       
  world.add(circle1);
    world.add(circle2); 
     world.add(circle3); 
    //alert(fruitcake.length)
                  rigidConstraints.distanceConstraint(circle1, circle2, 0.7);
                  rigidConstraints.distanceConstraint(fruitcake[63], circle2, 0.7, spacing);
                   rigidConstraints.distanceConstraint(fruitcake[62], circle2, 0.7, spacing);
                   rigidConstraints.distanceConstraint(circle2, circle3, 0.7);
                   rigidConstraints.distanceConstraint(circle3, circle1, 0.7);
                  world.add( rigidConstraints );
                  
                  
                  
     // trailer<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<                 

    // add some fun interaction
    var attractor = Physics.behavior('attractor', {
        order: 0,
        strength: 0.002
    });
    world.on({
        'interact:poke': function( pos ){
            world.wakeUpAll();
            attractor.position( pos );
            world.add( attractor );
        }
        ,'interact:move': function( pos ){
            attractor.position( pos );
        }
        ,'interact:release': function(){
            world.wakeUpAll();
            world.remove( attractor );
        }
    });

    // add things to the world
    world.add([
        Physics.behavior('interactive', { el: renderer.container })
        ,Physics.behavior('constant-acceleration')
        ,Physics.behavior('body-impulse-response')
        ,edgeBounce
    ]);

    // subscribe to ticker to advance the simulation
    Physics.util.ticker.on(function( time ) {
        world.step( time );
    });
});

 //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


 

</script> 


  </body>
</html>
