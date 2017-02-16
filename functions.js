window.addEventListener("load", init, false);

function init()
{
	var divId = document.querySelector("#div"),
		divClass = document.querySelector(".div"),
		parrafo = document.querySelector("p");

	div.addEventListener("click", saludaId);
	divClass.addEventListener("click", saludaClase);
	parrafo.addEventListener("click", saludaParrafo);
}

function saludaId()
{
	alert("Hola id");
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