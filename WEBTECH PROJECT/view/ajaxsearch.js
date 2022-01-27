
$(document).ready(function(){
$('#search-live').keyup(function(){
var txt =$(this).val();
if(txt !='')
{
$('#livesearch').html('');
$.ajax({
url:"../Controll/livesearch.php",
type:"post",
data:{search:txt},
dataType:"text",
success:function(data)
{
    console.log(data);
$('#livesearch').html(data);
}
});
}
else
{
$('#livesearch').html('');
}

});
});
