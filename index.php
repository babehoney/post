<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<div id="div">Div con id</div><br>
	<div class="div">Div con class</div><br>
	<div class="div1">Div con otra clase</div><br>
	<p>Párrafo</p>
     <p class="div2">Párrafo 2</p>
	<ul>
		<li>El 1</li>
		<li>El 2</li>
		<li>El 3</li>
		<li>El 4</li>
		<li>El 5</li>
	</ul>
</body>
</html><script>
window.addEventListener("load", init, false);
function init()
{
	    var divId = document.querySelector("#div"),
		divClass = document.querySelector(".div"),
		parrafo = document.querySelector("p");
		div1=document.querySelector(".div1");
		div2=document.querySelector(".div2");

	div.addEventListener("click", saludaId);
	divClass.addEventListener("click", saludaClase);
	parrafo.addEventListener("click", saludaParrafo);
	div1.addEventListener("click",hello);
	div2.addEventListener("click",verlo);
}
function saludaId()
{
	alert("Hola");
}

function saludaClase()
{
	alert("Hola clase");
}

function saludaParrafo()
{
	alert("Hola párrafo");
}

function changeListStyles()
{
	var li = document.querySelector("ul").querySelectorAll("li");
	for(var i = 0, total = li.length; i < total; i++)
	{
		li[i].style.color = "red";
	}
	li[0].style.textDecoration = 'underline';
}

function hello()
{
	alert("Que vaina");
}
function verlo()
{
	alert("pues si");
}
</script>