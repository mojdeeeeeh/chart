{{-- http://www.getorgchart.com/ --}}

<!DOCTYPE html>
<html>
<head>
    <title>OrgChart | First Look</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <script src="{{ asset('chart/js/getorgchart.js') }}"></script>
    <link href="{{ asset('chart/css/getorgchart.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }


        #people {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
     @include('layouts.menu')
    <div id="people"></div>


    <script type="text/javascript">
        var peopleElement = document.getElementById("people");
        var orgChart = new getOrgChart(peopleElement, {
            primaryFields: ["name", "title", "phone", "mail"],
            photoFields: ["image"],
            dataSource: [
                { id: 1, parentId: null, name: "Amber McKenzie", title: "CEO", phone: "678-772-470", mail: "lemmons@jourrapide.com", adress: "Atlanta, GA 30303", image: "images/f-11.jpg" },
                { id: 2, parentId: 1, name: "Ava Field", title: "Paper goods machine setter", phone: "937-912-4971", mail: "anderson@jourrapide.com", image: "images/f-10.jpg" },
                { id: 3, parentId: 1, name: "Evie Johnson", title: "Employer relations representative", phone: "314-722-6164", mail: "thornton@armyspy.com", image: "images/f-9.jpg" },
                { id: 4, parentId: 1, name: "Paul Shetler", title: "Teaching assistant", phone: "330-263-6439", mail: "shetler@rhyta.com", image: "images/f-5.jpg" },
                { id: 5, parentId: 2, name: "Rebecca Francis", title: "Welding machine setter", phone: "408-460-0589", image: "images/f-4.jpg" },
                { id: 6, parentId: 2, name: "Rebecca Randall", title: "Optometrist", phone: "801-920-9842", mail: "JasonWGoodman@armyspy.com", image: "images/f-8.jpg" },
                { id: 7, parentId: 2, name: "Spencer May", title: "System operator", phone: "Conservation scientist", mail: "hodges@teleworm.us", image: "images/f-7.jpg" },
                { id: 8, parentId: 6, name: "Max Ford", title: "Budget manager", phone: "989-474-8325", mail: "hunter@teleworm.us", image: "images/f-6.jpg" },
                { id: 9, parentId: 7, name: "Riley Bray", title: "Structural metal fabricator", phone: "479-359-2159", image: "images/f-3.jpg" },
                { id: 10, parentId: 7, name: "Callum Whitehouse", title: "Radar controller", phone: "847-474-8775", image: "images/f-2.jpg" }
            ]
        });
    </script>



</body>
</html>