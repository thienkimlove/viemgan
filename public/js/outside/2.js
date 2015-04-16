(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 690,
	height: 100,
	fps: 24,
	color: "#FFFFFF",
	manifest: [
		{src: Config.url + "/images/outside/Layer2.png", id:"Layer2"},
		{src: Config.url + "/images/outside/Layer2sOuterStroke.png", id:"Layer2sOuterStroke"},
		{src: Config.url + "/images/outside/Layer5.png", id:"Layer5"},
		{src: Config.url + "/images/outside/VectorSmartObjectsOuterGlow.png", id:"VectorSmartObjectsOuterGlow"},
		{src: Config.url + "/images/outside/VectorSmartObject.png", id:"VectorSmartObject"},
		{src: Config.url + "/images/outside/VectorSmartObject1.png", id:"VectorSmartObject1"},
		{src: Config.url + "/images/outside/VectorSmartObject2.png", id:"VectorSmartObject2"},
		{src: Config.url + "/images/outside/VectorSmartObject_1.png", id:"VectorSmartObject_1"}
	]
};



// symbols:



(lib.Layer2 = function() {
	this.initialize(img.Layer2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,132,83);


(lib.Layer2sOuterStroke = function() {
	this.initialize(img.Layer2sOuterStroke);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,134,85);


(lib.Layer5 = function() {
	this.initialize(img.Layer5);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,690,100);


(lib.VectorSmartObjectsOuterGlow = function() {
	this.initialize(img.VectorSmartObjectsOuterGlow);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,179,119);


(lib.VectorSmartObject = function() {
	this.initialize(img.VectorSmartObject);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,149,90);


(lib.VectorSmartObject1 = function() {
	this.initialize(img.VectorSmartObject1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,419,93);


(lib.VectorSmartObject2 = function() {
	this.initialize(img.VectorSmartObject2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,181,181);


(lib.VectorSmartObject_1 = function() {
	this.initialize(img.VectorSmartObject_1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,472,76);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.VectorSmartObject();
	this.instance.setTransform(-74,-46);

	this.instance_1 = new lib.VectorSmartObjectsOuterGlow();
	this.instance_1.setTransform(-89.5,-59.5);

	this.addChild(this.instance_1,this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-89.5,-59.5,179,119);


(lib.Symbol9 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.Layer2();
	this.instance.setTransform(0,0,0.788,0.788);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,104,65.4);


(lib.Symbol8 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.VectorSmartObject1();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,419,93);


(lib.Symbol7 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.VectorSmartObject2();
	this.instance.setTransform(0,0,0.801,0.801);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,145,145);


(lib.Symbol5 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AnXHXQjDjDAAkUQAAj+Cni6IAcgfQDEjDETAAQEUAADDDDQDEDEAAETQAAEUjEDDQiLCMi2AoQhIAQhOAAQkTAAjEjEg");
	this.shape.setTransform(66.8,66.8);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,133.5,133.5);


(lib.Symbol4 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.VectorSmartObject();
	this.instance.setTransform(15.5,13.5);

	this.instance_1 = new lib.VectorSmartObjectsOuterGlow();

	this.addChild(this.instance_1,this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,179,119);


(lib.Symbol3 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.Layer2sOuterStroke();

	this.instance_1 = new lib.Layer2();

	this.addChild(this.instance_1,this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,134,85);


(lib.Symbol2 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.VectorSmartObject_1();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,472,76);


(lib.shape54 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFFFFF","#FFFFFF","rgba(255,255,255,0.153)","rgba(255,255,255,0)"],[0,0.071,0.604,1],0,0,0,0,0,15.7).s().p("AhsBtQgtguAAg/QAAg+AtguQAugtA+AAQA/AAAuAtQAtAuAAA+QAAA/gtAuQguAtg/AAQg+AAgugtg");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-15.5,-15.5,31,31);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.Symbol4();
	this.instance.setTransform(0,0,1,1,0,0,0,89.5,59.5);
	this.instance.filters = [new cjs.ColorFilter(1, 0.37890625, 0.390625, 1, 0, 0, 0, 0)];
	this.instance.cache(-2,-2,183,123);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-89.5,-59.5,179,119);


(lib.Symbol6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol7();
	this.instance.setTransform(0.4,0,1,1,0,0,0,72.5,72.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({rotation:-20,y:0.1},0).wait(1).to({rotation:-40},0).wait(1).to({rotation:-60,y:0},0).wait(1).to({rotation:-80},0).wait(1).to({rotation:-100},0).wait(1).to({rotation:-120},0).wait(1).to({rotation:-140,x:0.3},0).wait(1).to({rotation:-160},0).wait(1).to({rotation:-180,x:0.4},0).wait(1).to({rotation:-200,x:0.3},0).wait(1).to({rotation:-220},0).wait(1).to({rotation:-240,y:0.1},0).wait(1).to({rotation:-260,y:0},0).wait(1).to({rotation:-280,x:0.4,y:0.1},0).wait(1).to({rotation:-300,x:0.3},0).wait(1).to({rotation:-320,x:0.4},0).wait(1).to({rotation:-340},0).wait(1).to({rotation:-360,y:0},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-72.1,-72.5,145,145);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(89.5,59.5);

	this.instance_1 = new lib.Tween2("synched",0);
	this.instance_1.setTransform(89.5,72.5);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,y:72.5},8).wait(7));
	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:false},8).to({y:59.5},6).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,179,119);


(lib.lagan = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol3();
	this.instance.setTransform(67,42.5,1,1,0,0,0,67,42.5);
	this.instance.shadow = new cjs.Shadow("rgba(255,0,0,1)",0,0,27);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28,-28,198,149);


(lib.sprite55 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.shape54("synched",0);
	this.instance.setTransform(0,0,0.024,0.818,135);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},1).wait(1).to({alpha:0.602},0).wait(2));

	// Layer 4
	this.instance_1 = new lib.shape54("synched",0);
	this.instance_1.setTransform(0,0,0.024,0.818,45);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},1).wait(1).to({alpha:0.602},0).wait(2));

	// Layer 3
	this.instance_2 = new lib.shape54("synched",0);
	this.instance_2.setTransform(0,0,0.042,1.419,90);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},1).wait(1).to({alpha:0.602},0).wait(2));

	// Layer 2
	this.instance_3 = new lib.shape54("synched",0);
	this.instance_3.setTransform(0,0,0.042,1.419);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({startPosition:0},1).wait(1).to({alpha:0.602},0).wait(2));

	// Layer 1
	this.instance_4 = new lib.shape54("synched",0);
	this.instance_4.setTransform(0,0,0.572,0.572);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({startPosition:0},1).wait(1).to({alpha:0.602},0).wait(2));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-22,-22,44,44);


(lib.sprite56 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 31
	this.instance = new lib.sprite55();
	this.instance.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.39,scaleY:0.39,x:1.4,y:-2.2},1).to({scaleX:0.47,scaleY:0.47,x:3,y:-4.3},1).to({scaleX:0.54,scaleY:0.54,x:4.3,y:-5.7},1).to({scaleX:0.59,scaleY:0.59,x:5.3,y:-6.7},1).to({scaleX:0.63,scaleY:0.63,x:6.2,y:-7.5},1).to({scaleX:0.66,scaleY:0.66,x:7.8,y:-8.7,alpha:0.988},2).to({scaleX:0.8,scaleY:0.8,x:59.4,y:-14.6,alpha:0.699},34).to({scaleX:1.52,scaleY:1.52,x:98.9,y:-40,alpha:0.02},29).wait(1).to({scaleX:1.55,scaleY:1.55,x:100.5,alpha:0},0).to({_off:true},9).wait(1));

	// Layer 25
	this.instance_1 = new lib.sprite55();
	this.instance_1.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({scaleX:1.41,scaleY:1.41,x:31.5,y:-24},45).to({x:42.6,y:-56.4,alpha:0.109},8).wait(1).to({x:44,y:-60.5,alpha:0},0).to({_off:true},26).wait(1));

	// Layer 19
	this.instance_2 = new lib.sprite55();
	this.instance_2.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({scaleX:1.41,scaleY:1.41,x:42.5,y:-9},45).to({x:57.2,y:-1.4,alpha:0.109},8).wait(1).to({x:59,y:-0.5,alpha:0},0).to({_off:true},26).wait(1));

	// Layer 13
	this.instance_3 = new lib.sprite55();
	this.instance_3.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({scaleX:0.57,scaleY:0.57,x:17.6,y:-0.1},2).to({scaleX:0.74,scaleY:0.74,x:27.7,y:1.8},2).to({scaleX:0.8,scaleY:0.8,x:30.9,y:2.9},2).to({x:61.5,y:15.1},16).to({scaleX:0.77,scaleY:0.77,x:65.2,y:15,alpha:0.949},2).to({scaleX:0.76,scaleY:0.76,x:67,y:14.5,alpha:0.922},1).to({scaleX:0.75,scaleY:0.75,x:68.6,y:13.6,alpha:0.891},1).to({scaleX:0.74,scaleY:0.74,x:69.8,y:12.2,alpha:0.871},1).to({scaleX:0.69,scaleY:0.69,x:74.3,y:4,alpha:0.73},5).to({scaleX:0.68,scaleY:0.68,x:75.6,y:2.7,alpha:0.711},1).to({scaleX:0.67,scaleY:0.67,x:76.9,y:2.1,alpha:0.68},1).to({scaleX:0.64,scaleY:0.64,x:82.1,y:1.5,alpha:0.602},3).to({scaleX:0.32,scaleY:0.32,x:103.7,y:12.1,alpha:0.039},15).wait(1).to({scaleX:0.3,scaleY:0.3,x:105,y:13,alpha:0},0).to({_off:true},27).wait(1));

	// Layer 7
	this.instance_4 = new lib.sprite55();
	this.instance_4.setTransform(0,0,0.193,0.193);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({scaleX:0.28,scaleY:0.28,x:-2,y:-3.3},1).to({scaleX:0.36,scaleY:0.36,x:-3.7,y:-6.3},1).to({scaleX:0.43,scaleY:0.43,x:-5.3,y:-8.9},1).to({scaleX:0.49,scaleY:0.49,x:-6.5,y:-11},1).to({scaleX:0.54,scaleY:0.54,x:-7.6,y:-12.8},1).to({scaleX:0.6,scaleY:0.6,x:-9,y:-15.2},2).to({scaleX:0.63,scaleY:0.63,x:-9.5,y:-16},2).to({x:-17.5,y:5},16).to({x:-5,y:24},18).to({scaleX:0.42,scaleY:0.42,x:-24,y:45,alpha:0.699},12).to({scaleX:0.31,scaleY:0.31,x:-18.4,y:66.5,alpha:0.199},14).wait(1).to({scaleX:0.31,scaleY:0.31,x:-18,y:68,alpha:0.16},0).to({_off:true},10).wait(1));

	// Layer 1
	this.instance_5 = new lib.sprite55();
	this.instance_5.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({scaleX:0.49,scaleY:0.49,x:13.2,y:-14.5},2).to({scaleX:0.53,scaleY:0.53,x:16.8,y:-17.7},1).to({scaleX:0.58,scaleY:0.58,x:20.8,y:-19.8},1).to({scaleX:0.59,scaleY:0.59,x:21.8,y:-20},1).to({scaleX:0.59,scaleY:0.59,x:22.6,y:-19.8},1).to({x:23.3,y:-19.5},1).to({x:23.9,y:-19},1).to({x:24.7,y:-17.8},1).to({x:25.7,y:22.1},29).to({x:26.5,y:23.3},1).to({x:35.5,y:32.4},9).to({x:36.4,y:35},2).to({x:36.5,y:36.5},1).to({scaleX:0.55,scaleY:0.55,x:34.5,y:44.8,alpha:0.828},5).to({scaleX:0.55,scaleY:0.55,x:33.3,y:46.2,alpha:0.801},1).to({scaleX:0.5,scaleY:0.5,x:25.5,y:52.6,alpha:0.602},6).to({scaleX:0.49,scaleY:0.49,x:24.9,y:53.9,alpha:0.57},1).to({scaleX:0.49,scaleY:0.49,x:24.7,y:55.2,alpha:0.539},1).to({scaleX:0.48,scaleY:0.48,x:24.9,y:56.5,alpha:0.5},1).to({scaleX:0.35,scaleY:0.35,x:35.3,y:70.2,alpha:0.051},10).wait(1).to({scaleX:0.34,scaleY:0.34,x:36.5,y:71.5,alpha:0},0).to({_off:true},3).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.5,-6.5,13,13);


(lib.sprite57 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 33
	this.spark1 = new lib.sprite56();
	this.spark1.setTransform(7.8,-111.5,1.6,1.6,45);

	this.timeline.addTween(cjs.Tween.get(this.spark1).wait(81));

	// Layer 1
	this.spark3 = new lib.sprite56();
	this.spark3.setTransform(0,-118.8,2.5,2.5,0,-90,90);
	this.spark3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.spark3).wait(9).to({_off:false},0).wait(72));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0.3,-119.1,15.1,15.1);


// stage content:



(lib._2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 15
	this.instance = new lib.sprite57();
	this.instance.setTransform(798.1,24.3,1,1,0,0,0,252.8,-123.6);

	this.instance_1 = new lib.sprite56();
	this.instance_1.setTransform(668.4,38,1,1,0,0,0,126.4,-6.5);

	this.instance_2 = new lib.sprite55();
	this.instance_2.setTransform(218.5,16);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_2},{t:this.instance_1},{t:this.instance}]},262).to({state:[]},215).wait(10));

	// Layer 16
	this.instance_3 = new lib.Symbol9();
	this.instance_3.setTransform(571.5,48.5,1,1,0,0,0,52,32.7);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(252).to({_off:false},0).to({alpha:1},14).to({_off:true},211).wait(10));

	// Layer 14
	this.instance_4 = new lib.Symbol6();
	this.instance_4.setTransform(641.2,119.7,1,0.998,0,0,0,72.5,72);

	this.instance_5 = new lib.Symbol5();
	this.instance_5.setTransform(568,48.8,1,0.998,0,0,0,66.4,67.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_5,p:{regX:66.4,regY:67.8,scaleY:0.998,x:568}},{t:this.instance_4,p:{regY:72,scaleY:0.998,x:641.2,y:119.7}}]},241).to({state:[{t:this.instance_5,p:{regX:66.8,regY:66.8,scaleY:1,x:567.8}},{t:this.instance_4,p:{regY:72.5,scaleY:1,x:639.2,y:121.5}}]},17).to({state:[]},203).wait(26));

	// Layer 13
	this.instance_6 = new lib.Symbol8();
	this.instance_6.setTransform(242.2,53.5,1,1,0,0,0,209.4,46.5);
	this.instance_6._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(226).to({_off:false},0).wait(1).to({regX:209.5,x:241.9},0).wait(1).to({x:241.4},0).wait(1).to({x:240.6},0).wait(1).to({x:239.7},0).wait(1).to({x:238.6},0).wait(1).to({x:237.3},0).wait(1).to({x:235.9},0).wait(1).to({x:234.6},0).wait(1).to({x:233.5},0).wait(1).to({x:232.6},0).wait(1).to({x:231.9},0).wait(1).to({x:231.4},0).wait(1).to({x:231},0).wait(1).to({regX:209.4,x:230.1},0).to({_off:true},237).wait(10));

	// Layer 12
	this.instance_7 = new lib.Symbol2();
	this.instance_7.setTransform(673.8,49,1,1,0,0,0,235.8,38);
	this.instance_7.alpha = 0;
	this.instance_7._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_7).wait(51).to({_off:false},0).wait(1).to({regX:236,x:608.5,alpha:0.1},0).wait(1).to({x:557.5,alpha:0.2},0).wait(1).to({x:519.2,alpha:0.3},0).wait(1).to({x:491.8,alpha:0.4},0).wait(1).to({x:473.4,alpha:0.5},0).wait(1).to({x:462.2,alpha:0.6},0).wait(1).to({x:456.5,alpha:0.7},0).wait(1).to({x:454.4,alpha:0.8},0).wait(1).to({x:454.1,alpha:0.9},0).wait(1).to({regX:235.8,x:429.5,alpha:1},0).wait(1).to({regX:236,x:429.7},0).wait(22).to({regX:235.8,x:429.5},0).wait(1).to({regX:236,x:429.7},0).wait(7).to({regX:235.8,x:429.5},0).wait(1).to({regX:236,x:429.7},0).wait(12).to({regX:235.8,x:429.5},0).wait(1).to({regX:236,x:429.7},0).wait(24).to({regX:235.8,x:429.5},0).wait(1).to({regX:236,x:429.7},0).wait(35).to({regX:235.8,x:429.5},0).wait(1).to({regX:236,x:429.7},0).wait(45).to({scaleY:1.13,skewY:-19.5,x:429.6,y:0.5,alpha:0.8},0).wait(1).to({scaleY:1.26,skewY:-39,y:-48,alpha:0.6},0).wait(1).to({scaleX:0.78,scaleY:1.38,x:429.7,y:-104.4,alpha:0.55},0).wait(1).to({scaleX:0.56,scaleY:1.5,skewY:-39.1,y:-160.9,alpha:0.5},0).to({_off:true},1).wait(271));

	// virus
	this.instance_8 = new lib.Symbol1();
	this.instance_8.setTransform(104.2,20.5,1,1,0,0,0,89.5,59.5);
	this.instance_8._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_8).wait(31).to({_off:false},0).wait(1).to({regY:66,y:28},0).wait(1).to({y:29.4},0).wait(1).to({y:31.3},0).wait(1).to({y:33.7},0).wait(1).to({y:36.6},0).wait(1).to({y:39.9},0).wait(1).to({y:43.7},0).wait(1).to({y:47.5},0).wait(1).to({y:50.8},0).wait(1).to({y:53.4},0).wait(1).to({y:54.4},0).wait(1).to({y:55.1},0).wait(1).to({y:55.7},0).wait(1).to({y:56.1},0).wait(1).to({regY:59.5,y:41.9},0).wait(1).to({regY:66,y:48.4},0).wait(23).to({regY:59.5,y:41.9},0).wait(1).to({regY:66,y:48.4},0).wait(95).to({regY:59.5,y:41.9},0).wait(1).to({regY:66,y:48.4},0).wait(45).to({regY:59.5,y:41.9},0).wait(1).to({regY:66,scaleY:1.13,skewY:-19.5,x:104.1,y:0.7,alpha:0.8},0).wait(1).to({scaleY:1.26,skewY:-39,y:-46.9,alpha:0.6},0).wait(1).to({scaleX:0.78,scaleY:1.38,y:-102.6,alpha:0.55},0).wait(1).to({scaleX:0.56,scaleY:1.5,skewY:-39.1,y:-158.3,alpha:0.5},0).to({_off:true},1).wait(270));

	// gan
	this.instance_9 = new lib.lagan();
	this.instance_9.setTransform(67,49.5,1,1,0,0,0,67,42.5);
	this.instance_9._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_9).wait(17).to({_off:false},0).wait(1).to({x:68.3},0).wait(1).to({x:70.1},0).wait(1).to({x:72.4},0).wait(1).to({x:75.2},0).wait(1).to({x:78.6},0).wait(1).to({x:82.5},0).wait(1).to({x:86.9},0).wait(1).to({x:91.9},0).wait(1).to({x:97.4},0).wait(1).to({x:102.8},0).wait(1).to({x:104.1},0).wait(185).to({scaleY:1.13,skewY:-19.5,y:1.1,alpha:0.8},0).wait(1).to({scaleY:1.26,skewY:-39,y:-47.4,alpha:0.6},0).wait(1).to({scaleX:0.78,scaleY:1.38,y:-103.9,alpha:0.55},0).wait(1).to({scaleX:0.56,scaleY:1.5,skewY:-39.1,y:-160.4,alpha:0.5},0).to({_off:true},1).wait(270));

	// background
	this.instance_10 = new lib.Layer5();

	this.timeline.addTween(cjs.Tween.get(this.instance_10).wait(487));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(345,50,690,100);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;