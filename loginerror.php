<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
</head>
<body>

<p>Directory access is forbidden.</p>
<button id="back"> BACK </button>
<script>
var btn = document.getElementById('back');
btn.addEventListener('click', function() {
  document.location.href = 'first.php';
});
</script>
</body>
</html>