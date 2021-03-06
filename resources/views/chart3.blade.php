
{{-- http://www.getorgchart.com/ --}}
<!DOCTYPE html>
<html>
<head>
        <title>OrgChart | Create Your Own Theme 3</title>

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

            .get-org-chart rect.get-box {
                fill: #ffffff;
                stroke: #D9D9D9;
            }

            .get-org-chart .get-text.get-text-0 {
                fill: #262626;
            }
            
            .get-org-chart .get-text.get-text-1 {
                fill: #262626;
            }
            
            .get-org-chart .get-text.get-text-2 {
                fill: #788687;
            }

            .get-green.get-org-chart {
                background-color: #f2f2f2;
            }
            .more-info {
                fill: #18879B;
            }

            .btn path {
                fill: #F8F8F8;
                stroke: #D9D9D9;
            }

            .btn {
                cursor: pointer;
            }
            
            .btn circle {
                fill: #555555;
            }

            .btn line {                
                stroke-width: 3px;
                stroke: #ffffff;
            }         
    </style>
</head>
<body>
    @include('layouts.menu')
    <div id="people"></div>
    <script type="text/javascript">
        getOrgChart.themes.myTheme =
        {
            size: [330, 260],
            toolbarHeight: 46,
            textPoints: [
                { x: 20, y: 45, width: 300 },
                { x: 120, y: 100, width: 200 },
                { x: 120, y: 125, width: 200 }
            ],
            //textPointsNoImage: [] NOT IMPLEMENTED,
            box: '<rect x="0" y="0" height="260" width="330" rx="10" ry="10" class="get-box"></rect>'
                + '<g transform="matrix(0.25,0,0,0.25,123,142)"><path d="M48.014,42.889l-9.553-4.776C37.56,37.662,37,36.756,37,35.748v-3.381c0.229-0.28,0.47-0.599,0.719-0.951  c1.239-1.75,2.232-3.698,2.954-5.799C42.084,24.97,43,23.575,43,22v-4c0-0.963-0.36-1.896-1-2.625v-5.319  c0.056-0.55,0.276-3.824-2.092-6.525C37.854,1.188,34.521,0,30,0s-7.854,1.188-9.908,3.53C17.724,6.231,17.944,9.506,18,10.056  v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309  c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C8.801,44.424,7,47.458,7,50.762V54c0,4.746,15.045,6,23,6s23-1.254,23-6v-3.043  C53,47.519,51.089,44.427,48.014,42.889z M51,54c0,1.357-7.412,4-21,4S9,55.357,9,54v-3.238c0-2.571,1.402-4.934,3.659-6.164  l8.921-4.866C23.073,38.917,24,37.354,24,35.655v-4.019l-0.233-0.278c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22  C19.346,23.303,19,22.676,19,22v-4c0-0.561,0.238-1.084,0.67-1.475L20,16.228V10l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021  C23.253,2.958,26.081,2,30,2c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L40,16.228l0.33,0.298  C40.762,16.916,41,17.439,41,18v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495c-0.669,2.081-1.622,4.003-2.834,5.713  c-0.297,0.421-0.586,0.794-0.837,1.079L35,31.623v4.125c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776  C49.513,45.874,51,48.28,51,50.957V54z" fill="#FFFFFF"/></g>'
                + '<g transform="matrix(1,0,0,1,20,190)" class="btn" data-action="edit"><path d="M5 0 L97 0 Q97 0 97 0 L97 45 Q97 45 97 45 L5 45 Q0 45 0 40 L0 5 Q0 0 5 0 Z"></path><text x="35" y="27" width="60">Edit</text></g>'
                + '<g transform="matrix(1,0,0,1,117,190)" class="btn" data-action="add"><path d="M0 0 L97 0 Q97 0 97 0 L97 45 Q97 45 97 45 L0 45 Q0 45 0 45 L0 0 Q0 0 0 0 Z"></path><circle cx="49" cy="23" r="10"></circle><line x1="42" y1="23" x2="56" y2="23"></line><line x1="49" y1="16" x2="49" y2="30"></line></g>'
                + '<g transform="matrix(1,0,0,1,214,190)" class="btn" data-action="preview"><path d="M0 0 L92 0 Q97 0 97 5 L97 40 Q97 45 92 45 L0 45 Q0 45 0 45 L0 0 Q0 0 0 0 Z"></path><text x="25" y="27" width="60">Profile</text></g>',
            text: '<text width="[width]" class="get-text get-text-[index]" x="[x]" y="[y]">[text]</text>',
            image: '<clipPath id="clip"><circle cx="60" cy="120" r="40" /></clipPath><image preserveAspectRatio="xMidYMid slice" clip-path="url(#clip)" xlink:href="[href]" x="20" y="80" height="80" width="80"/>',
            expandCollapseBtnRadius: 20
        };

        var orgChart = new getOrgChart(document.getElementById("people"), {
            theme: "myTheme",
            enableEdit: false,
            enableDetailsView: false,
            primaryFields: ["Title", "Name", "Email", "Image"],
            color: "green",
            updatedEvent: function () {
                init();
            },
            dataSource: [
                { id: 1, parentId: null, Name: "Jasper Lepardo", Title: "CEO", Email: "jasper@example.com", Image: "http://www.getorgchart.com/GetOrgChart/getorgchart-demos/images/f-11.jpg" },
                { id: 2, parentId: 1, Name: "John Smith", Title: "Front-end Developer", Email: "john@example.com", Image: "http://www.getorgchart.com/GetOrgChart/getorgchart-demos/images/f-12.jpg" },
                { id: 3, parentId: 1, Name: "sara Field", Title: "Project Manager", Email: "ava@example.com", Image: "http://www.getorgchart.com/GetOrgChart/getorgchart-demos/images/f-14.jpg" }]
        });

        function getNodeByClickedBtn(el) {
            while (el.parentNode) {
                el = el.parentNode;
                if (el.getAttribute("data-node-id"))
                    return el;
            }
            return null;
        }


        var init = function () {
            var btns = document.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {

                btns[i].addEventListener("click", function () {
                    var nodeElement = getNodeByClickedBtn(this);
                    var action = this.getAttribute("data-action");
                    var id = nodeElement.getAttribute("data-node-id");
                    var node = orgChart.nodes[id];

                    switch (action) {
                        case "add":
                            orgChart.insertNode(id);
                            break;
                        case "edit":
                            orgChart.showEditView(id);
                            break;
                        case "preview":
                            orgChart.showDetailsView(id);
                            break;
                    }
                });
            }
        }
        init();
    </script>
</body>
</html>