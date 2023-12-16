<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel</title>
</head>
<body>
    <div>
        <p>enfin de valider votre adresse email merci de cliquer sur le lien suivant</p>
        <p><a href="{{route('verification',['email'=>$recipient,'token'=>$token])}}">Confirmation</a></p> 
    </div>
   
</body>
</html>

