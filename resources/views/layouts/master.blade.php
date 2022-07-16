<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SocialShare</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-navbar />

  <section>
    @yield("content")
  </section>

  @vite('resources/js/app.js')
</body>
</html>
