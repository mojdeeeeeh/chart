<!-- https://docs.dhtmlx.com/diagram/samples/diagram/01_organogram/index.html
assets: codebase1 common1 -->
<!DOCTYPE html>
<html>

<head>
	<title>Slim Organogram</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="{{ asset('codebase1/diagram.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('codebase1/diagram.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('common1/dhx_samples.css') }}">
	<script type="text/javascript" src="{{ asset('common1/data.js') }}"></script>

	<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<style>
	body {
		text-align: center;
	}
</style>
<body>
	 @include('layouts.menu')
	<script>
		var diagram = new dhx.Diagram(document.body, { 
			type: "org",
			defaultShapeType: "img-card",
			scale : 0.7
		});
		diagram.data.parse(bigOrganogramData);
	</script>

</body>

</html>