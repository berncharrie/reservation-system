let btnShow = document.querySelector('button');
let output = document.querySelector('time');

btnShow.addEventListener('click', () => {


	let today= new Date();

	let month= today.getMonth() + 1;
	let year = today.getFullYear();
	let day = day.getDate();

	let current_date = `${month}/${date}/${year}`;
	output.innerText = current_date;

})
