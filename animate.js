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
);//��������� ������� animate()
},
function(){
$(this).stop().animate(
{
left: '-290px',
backgroundColor: 'blue'	
},
1500,
'easeOutBounce'
);//��������� ������� animate()
}
);//��������� ������� hover()
});//��������� ������� ready()