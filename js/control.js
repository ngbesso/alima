//alert("salimata");
$(document).ready(function(){

$('#btnValider').click(function() {
	var url = "traitement/insert.php"; 
	$('#btnValider').text('enregistrer...');
	$('#btnValider').attr('disabled',true);
	$.post(url,{
				nom:$('#nom').val(),
				prenom:$('#prenom').val(),
				telephone:$('#tel').val(),
				email:$('#email').val(),
				description:$('#description').val()
				},
			function(data){
				if (data==1){
					alert("data");
					$('#btnValider').text('enregistrer');
					$('#btnValider').attr('disabled',false);
					$('#nom').val('');
					$('#prenom').val('');
					$('#tel').val('');
					$('#email').val('');
					$('#description').val('');
					
				}else{
				
				alert(data);
				}

			});
});

});