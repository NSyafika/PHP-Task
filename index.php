<html>
<head>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
    <script>
        var mykey = 'SFmgSjHO69Nuehb4F4Mjc2A28AmAtNF8';
        
        runApi = (n) => {
            event.preventDefault()
            var fetch = $.get(`https://api.giphy.com/v1/gifs/random?api_key=${mykey}&tag=${n.value.toLowerCase()}&limit=1`);
            fetch.done(function(data) {
                document.getElementById("gifurl").innerHTML = data.data.url
				
            });
        }
    </script>
</head>

<form action="index.php" method="GET" onsubmit="runApi(keyword)" > 
<p><input type="text" name="keyword" id="keyword" value = "<?php echo (empty($_GET['keyword']) ? "" : $_GET['keyword']) ?>" readonly>
</p>

<input type="submit"  value = "Find">



</form>



{<br>Source: <a id="gifurl" href="https://api.giphy.com/v1/gifs/random?api_key=" target = '_blank'><br>}



</html>



