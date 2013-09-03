$(function(){

	var canvas = $("#myCanvas");
	var context = canvas.get(0).getContext("2d");
		
	$(window).resize(resizeCanvas);
	
	function resizeCanvas() {
		canvas.attr("width", $(window).get(0).innerWidth);
		canvas.attr("height", $(window).get(0).innerHeight);
		context.fillRect(0, 0, canvas.width(), canvas.height());
	}
	
	resizeCanvas();
	
	context.fillStyle = "rgb(255, 0, 0)";
	context.save();
	context.fillRect(50, 50, 100, 100);
	
	context.fillStyle = "rgb(0, 0, 255)";
	context.save();
	context.fillRect(200, 50, 100, 100);
	
	context.restore();
	context.fillRect(350,50,100,100);
	
	context.restore();
	context.fillRect(50,175,100,100);
	
	context.translate(150,150);
	
	context.fillStyle = "rgb(50, 50, 50)";
	context.scale(2, 2);
	context.rotate(0.7854);
	context.transform(2, 0, 0, 2, 150, 150);
	context.fillRect(-50, -50, 100, 100);
	
	context.setTransform(1, 0, 0, 1, 0, 0);
	var xScale = Math.cos(0.7854);
	var ySkew = -Math.sin(0.7854);
	var xSkew = Math.sin(0.7854);
	var yScale = Math.cos(0.7854);
	var xTrans = 200;
	var yTrans = 200;
	context.fillStyle = "rgb(0, 255, 0)";
	context.transform(xScale, ySkew, xSkew, yScale, xTrans, yTrans);
	context.globalAlpha = 0.5;
	context.fillRect(-50, -50, 100, 100);
	
	context.fillStyle = "rgb(63, 169, 245)";
	context.fillRect(50, 50, 100, 100);
	context.globalCompositeOperation = "lighter";
	context.fillRect(50, 50, 100, 100);
	context.fillStyle = "rgb(255, 123, 172)";
	context.shadowBlur = 0;
	context.shadowOffsetX = 10;
	context.shadowOffsetY = 10;
	context.shadowColor = "rgb(255, 255, 255)";
	context.fillRect(100, 100, 100, 100);
	
	context.shadowColor = "rgb(255, 0, 0)"; //  red
	context.shadowBlur = 50;
	context.shadowOffsetX = 0;
	context.shadowOffsetY = 0;
	context.beginPath();
	context.arc(400, 100, 50, 0, Math.PI*2, false);
	context.closePath();
	context.fill();
	
	var gradient = context.createLinearGradient(0, 0, 0, canvas.height());
	gradient.addColorStop(0, "rgb(0, 0, 0)");
	gradient.addColorStop(1, "rgb(255, 255, 255)");
	
	context.fillStyle = gradient;
	context.fillRect(0, 0, canvas.width(), canvas.height());
	
	var gradient2 = context.createRadialGradient(300, 300, 10, 100, 100, 50);
	gradient2.addColorStop(0, "rgb(0, 0, 0)");
	gradient2.addColorStop(1, "rgb(150, 150, 150)");
	
	context.fillStyle = gradient;
	context.fillRect(0, 0, canvas.width(), canvas.height());
	
	var canvasCentereX = canvas.width()/2;
	var canvasCentereY = canvas.height()/2;
	
	var gradient = context.createRadialGradient(canvasCentereX, canvasCentereY, 0, canvasCentereX, canvasCentereY, 250);
	gradient.addColorStop(0, "rgb(0, 0, 0)");
	gradient.addColorStop(1, "rgb(150, 150, 150)");
	
	context.fillStyle = gradient;
	context.fillRect(0, 0, canvas.width(), canvas.height());
	
	context.fillStyle = "orange";
	context.beginPath();
	context.moveTo(100, 50);
	context.lineTo(150, 150);
	context.lineTo(50, 150);
	context.closePath();
	context.stroke();
	context.fill();
	
});