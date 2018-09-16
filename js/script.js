 let times = document.querySelectorAll('.time');
 let nomeTimes = document.querySelectorAll('.name');
 var imgs = [];
nomeTimes.forEach((x,k)=>{
	geraTimes(x.innerHTML,times[k]);
	 
});

 function geraTimes(name, div) {
	let url = `https://www.thesportsdb.com/api/v1/json/1/searchteams.php?t=${name}`
	//fetch realiza a requisição
	fetch(url)
	  .then(resposta => resposta.json())
	  .then( function(data){ //aqui vai oq vc faz com a resposta definitiva
            let str = data.teams[0].strTeamBadge;
			div.innerHTML = `<img src='${str}'>`
			
});
}
