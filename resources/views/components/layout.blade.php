<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- direttiva Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Google Material -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

<!-- Fontawesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{$title ?? ""}}</title>
</head>
<body>
   <x-navbar></x-navbar>
    <div>   
        {{$slot}}
    </div>



<x-footer></x-footer>



</body>
</html>