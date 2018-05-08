<!--https://docs.dhtmlx.com/diagram/samples/diagram/index.html
assets: codebase2 common2 -->

<!DOCTYPE html>
<html>

<head>
	<title>Image card editor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="{{ asset('codebase2/diagram-editor.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('codebase2/diagram-editor.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

	<script type="text/javascript" src="{{ asset('common2/data.js') }}"></script>

	<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<style>
		html,
		body {
			height: 100%;
			margin: 0;
		}
	</style>
</head>

<body>
	@include('layouts.menu')
	<script>
		var editor = new dhx.DiagramEditor(document.body, {
			type: "org",
			shapeType: "img-card"
		});
		editor.parse(bigOrganogramData);
	</script>
</body>

</html>