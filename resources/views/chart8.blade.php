<!-- http://resources.jointjs.com/demos/orgchart
assets: orgChart/all -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orgchart, Tree Layout and Interaction</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('orgChart/build/rappid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('orgChart/css/orgchart.css') }}">
  </head>
  <body>
    <p class="center">Drag nodes to move branches, add new nodes with '+', remove old nodes with '-'.</p>
    <div id="paper-container"></div>
    <p>Show the ORG Chart in  <span id="orgchart-direction"></span> direction.</p>
    <!-- Rappid/JointJS dependencies: -->
    <script src="{{ asset('orgChart/node_modules/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('orgChart/node_modules/lodash/index.js') }}"></script>
    <script src="{{ asset('orgChart/node_modules/backbone/backbone.js') }}"></script>
    <script src="{{ asset('orgChart/build/rappid.min.js') }}"></script>
    <!-- OrgChart app: -->
    <script src="{{ asset('orgChart/src/orgchart.js') }}"></script>
  </body>
</html>