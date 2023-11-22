<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body style="overflow-x: hidden; margin: 0; padding: 0;">
    <livewire:header />
    <livewire:homepage />

  <livewire:mescompetences />
  <livewire:timeline />
  <livewire:contact />
  @livewireScripts
  <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/0167b57729.js" crossorigin="anonymous"></script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtZZ0nx3DoBbOTYAWgZT8Nod3lH4F9lgY&callback=initMap">
</script>
</body>
</html>
