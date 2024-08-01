<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <nav>
    <x-link href='/'>Home</x-link>
    <x-link href='/about'>About</x-link>
    <x-link href='/contact'>Contact</x-link>
    </nav>
    {{ $slot}}
</body>
</html>