$(document).ready(function(){
	//LETTURA
	$.getJSON( "data.json", function( data ) {
		//questa parte qui viene eseguita solo in caso tutto va bene
		code = "";
		for(i = 0; i < data.length; i++){
			code += "<div><a href='#'>Elemento "+(i+1)+"</a><ul>";
			$.each(data[i], function(key, value){
				code += "<li>"+key+": "+value+"</li>";
			});
			code += "</ul></div>";
		}

		/* Oppure si può ciclare con un doppio $.each, invece che con un for e $.each
		$.each(data, function(i,field){ //per ogni oggetto json 
			console.log(i+""+field);
            $.each(field,function(key,value){ //per ogni campo
                   console.log(key+value); 
            });
		});*/


		
		$("main").append(code);
	}).done(function() {
		$("main div ul").not("main div:first-child ul").hide();
		$("a").click(function() {
			$("main ul").hide();
			$(this).next().show();
		});
	}).fail(function() {
		$("main").append("<p>Errore nel caricamento dei dati</p>");
	});



	//Utilizzo obbligato di nth-child() per selezionare un elemento nella tabella
	$("button.insert").click(function(){
		valore = $("input").val();
		console.log(valore);
		colonna = valore % 10;
		console.log("colonna " + colonna);
		riga = (valore - colonna) / 10;
		console.log("riga " + riga);
		colonna++;
		riga++;
		$("table tr:nth-child("+riga+") td:nth-child("+colonna+")").css("background","red");		
	});
	$("tr").css("background-color","internal");//Colora tutti i tag tr con il colore di defaukt

	$("selettore").index(); //Ritorna la posizione del selettore rispetto al padre
	$("selettore").index("#elemeto"); //Ritorna la posizione del #elemento rispetto a tutti gli elementi selezionati dal selettore


	$("body>div>div:eq("+value+")").length; // restituisce quanti elementi sono stati selezionati

	parseInt($(this).val()); // converte in intero

	$("span").closest("ul"); //restituisce l'antenato ul più vicino a span



});