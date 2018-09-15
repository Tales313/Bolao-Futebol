 let times = document.querySelectorAll('.time');
console.log(times.length)
 function geraTimes() {
	let url = 'https://www.thesportsdb.com/api/v1/json/1/searchteams.php?t=Arsenal'
	//fetch realiza a requisição
	fetch(url)
	  .then(resposta => resposta.json())
	  .then( function(data){ //aqui vai oq vc faz com a resposta definitiva
            let str = data.teams[0].strTeamBadge;
            
            times.forEach(x=> {
                x.innerHTML = `<img src='${str}'>`;
            })
            

});
}
geraTimes();