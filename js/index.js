const delay = ms => new Promise(res => setTimeout(res, ms));

async function animar() {
	var divs = document.getElementsByTagName('div');
	for (let i = 0; i < divs.length; i++) {
		await delay(200);
		divs[i].classList.add('animar');
	}
}