/**Arquivo JS*/
$("#btnEnvia").click(function(){
	
	var option = $("input[type=radio][name=opt]:checked").val();
	console.log("opção escolhida: "+option);

	$.getJSON("php/insereVoto.php?opt="+option,function(data){
	
		var total = 0;
		var mercedes = 0;
		var redbull = 0;
		var ferrari = 0;
		$.each(data, function(v,valor){
		
			switch (valor.opt){
				case 'Mercedes':
					mercedes++;
					break;
				case 'Redbull':
					redbull++;
					break;	
				case 'Ferrari':
					ferrari++;
					break;
			}
			total++;
		});
		///saidas
		console.log("Total de votos: "+total);
		console.log("Mercedes: "+mercedes);
		console.log("redbull: "+redbull);
		console.log("ferrari: "+ferrari);
		
		//calcular as porcentagens
		var per_mercedes = (mercedes*100)/total;
		console.log("% "+per_mercedes);
		var per_redbull = (redbull*100)/total;
		console.log("% "+per_redbull);
		var per_ferrari = (ferrari*100)/total;
		console.log("% "+ferrari);
		
		//alimentação da  barra de progresso
		$("#mercedes_bar").css("width", per_mercedes+"%");
		$("#redbull_bar").css("width", per_redbull+"%");
		$("#ferrari_bar").css("width", per_ferrari+"%");

	});
});