$(document).ready(function(){
$('#dashboard').hover(
function(){
$(this).stop().animate(
{
left:'0',
backgroundColor:'rgb(135, 206, 250)'
},
500,
'easeInSine'
);//окончание функции animate()
},
function(){
$(this).stop().animate(
{
left: '-290px',
backgroundColor: 'blue'	
},
1500,
'easeOutBounce'
);//окончание функции animate()
}
);//окончание функции hover()
});//окончание функции ready()