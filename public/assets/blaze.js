/*
    File Name 		: blaze.js
	Project Name    : Blaze
	Version 		: 1.0.0
	Date Created	: JAN 24 2020
	Date Modified	: APR 7 2020
	Author			: Yash Gohel
	Username 		: ygohel18
	Email			: yashgohel16@gmail.com
	Licence			: GNU General Public License v3.0
	Github			: https://github.com/Ygohel18/Blaze
 */

function showMessage( msgText, msgType) {
	var html = document.querySelector('html');
    var panel = document.createElement('div');
	var msg = document.createElement('p');
	
    panel.setAttribute('class','msgBox');
	panel.classList.add('animated', 'slideInRight');
	
	html.appendChild(panel);
    msg.textContent = msgText;
    panel.appendChild(msg);
	msg.setAttribute('class','title');
	
	if(msgType == 'success' || msgType == 0) msg.style.color = '#4caf50';
	else if(msgType == 'denger' || msgType == 1) msg.style.color = '#f44336';
	else if(msgType == 'warning' || msgType == 2) msg.style.color = '#ffeb3b';
	
	setTimeout(function () {
		panel.classList.remove('slideInRight');
		panel.classList.add('animated', 'fadeOutUp');
    }, 3000);
}