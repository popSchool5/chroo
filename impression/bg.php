<?php
$bb = $_GET['id'];

?>
<script>
    $url ="./index.php?id="+<?php echo $bb;?>;
</script>
<script>
    
    fetch($url)

        .then(function(response) {
            return response.blob();
        })
        .then(function(myBlob) {
            const objectURL = URL.createObjectURL(myBlob);
            compteur = 0;
            console.log(objectURL)

                var iframe = document.createElement('iframe');
                document.body.appendChild(iframe);
                iframe.style.display = 'none';

            
            interval = setInterval(() => {
                var iframe = document.createElement('iframe');
                document.body.appendChild(iframe);
                iframe.style.display = 'none';

                iframe.onload = function() {
                    setTimeout(function() {
                        iframe.focus();
                        iframe.contentWindow.print();
                       compteur++ 
                    }, 0);
                };
                iframe.src = objectURL;
            
        
                if (compteur >= 1) {
                    clearInterval(interval);
                    window.location.href = "../index.php";
                }
            }, 1340);
        })
</script>
