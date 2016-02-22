<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<h1 id='letter'>hello, world. good morning.</h1>

<script>
	var words = $('#letter').split("");
	for (i in words){
		words[i] = "<span id='word"+i+"'>" + word[i] + "</span";
	}
	var textUpdate = words.join('';)
	$('#letter').html(textUpdate);

</script>



</html>