<?php
$curl = curl_init();
curl_setopt(?curl, CURLOPT_URL, 'https://api.trakteer.id/v1/public/quantity-given?email=	Supporter Email&key=trapi-mDbUL8Vg1CtnhckMGl169W7D');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tentang Website</title>
</head>
<body>
    <div class="latar">
        <div class="atas">
        </div>
        <div class="bawah">
            <div class="board">
                    <div class="slide">
                        <center>
                            <div class="isian fade"> 
                                <center><img src="/asset/logo_light.png" alt=""></center> 
                                <h2><center>Tentang Website</center></h2>    
                                <p><center>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero dolorum adipisci nostrum molestiae voluptatem odio, deserunt voluptatum et. Dicta libero, maiores alias corrupti at odio harum omnis iste ex nulla corporis ipsam quam ducimus facilis maxime ipsum laudantium molestiae blanditiis dignissimos officia quia consequatur quaerat hic sint? Illum, esse neque.</center></p>
                            </div>
                        </center>

                        <center>
                            <div class="isian fade">
                                <center><img src="/asset/logo_ofc.png" alt=""></center>
                                <h2><center>Tentang Developer</center></h2>       
                                <p><center>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa debitis tempora repudiandae minus pariatur voluptate? Saepe molestias, reiciendis nam deserunt error ducimus numquam ipsum modi esse totam repellat voluptatem nostrum rerum aut dolorum quas optio perferendis eius odit harum. Minima, assumenda suscipit? Quia quisquam aperiam voluptatum repellendus fugit iste dolor.</center></p>
                            </div>
                        </center>
            
                        <center>
                            <div class="isian fade">
                                <center><img src="/asset/logo_dark.png" alt=""></center>
                                <h2><center>Tentang Update</center></h2>       
                                <p><center>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum doloremque nesciunt odio. Omnis voluptatum deserunt tempora eveniet quia provident vitae pariatur adipisci? Nemo, vero cum eveniet quibusdam itaque ullam, provident soluta exercitationem dolorum deleniti suscipit fugit veniam sapiente ipsam autem. Amet eaque architecto molestiae excepturi aperiam, adipisci nulla dolore quo.</center></p>
                            </div>
                        </center>
            
                        
                         
                    </div>


                    <center>
                    <div class="tombol">
                        <a class="prev" onClick="nextslide(-1)">&#10094;</a>
                        <div class="page">
                            <span class="dot" onClick="dotslide(1)"></span>
                            <span class="dot" onClick="dotslide(2)"></span>
                            <span class="dot" onClick="dotslide(3)"></span>
                        </div> 
                        <a class="next" onClick="nextslide(1)">&#10095;</a> 
                    </div> 
                </center>    
            </div>
        </div>
    </div>

<script src="script.js"></script>
</body>
</html>