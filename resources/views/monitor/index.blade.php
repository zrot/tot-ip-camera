@extends('layouts._layout')
@section('page_heading','Camera Monitoring')
@section('section')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">
                Basic Tabs
            </div> -->
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#camarea" data-toggle="tab" aria-expanded="false">Camera Area</a>
                    </li>
                    <li><a href="#camview" data-toggle="tab" aria-expanded="true">Camera View</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="camarea">
                        <p>
                          <div class="col-sm-8">
                            <div id="map" style="height: 550px;"></div>
                              <script>

                                var map, infoWindow;
                                function initMap() {
                                  map = new google.maps.Map(document.getElementById('map'), {
                                    // center: {lat: 13.746429, lng: 100.531590},
                                    center: {lat: 13.709261, lng: 100.406856},
                                    zoom: 14
                                  });
                                  infoWindow = new google.maps.InfoWindow;

                                  // Try HTML5 geolocation.
                                  if (navigator.geolocation) {
                                    // navigator.geolocation.getCurrentPosition(function(position) {
                                    //   var pos = {
                                    //     lat: position.coords.latitude,
                                    //     lng: position.coords.longitude
                                    //   };
                                    //
                                    //   // infoWindow.setPosition(pos);
                                    //   // infoWindow.setContent('Location found.');
                                    //   infoWindow.open(map);
                                    //   map.setCenter(pos);
                                    // }, function() {
                                    //   handleLocationError(true, infoWindow, map.getCenter());
                                    // });
                                  } else {
                                    // Browser doesn't support Geolocation
                                    handleLocationError(false, infoWindow, map.getCenter());
                                  }

                                  var contentString = '<div id="content">'+
                                                      '<div id="siteNotice">'+
                                                      '</div>'+
                                                      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                                                      '<div id="bodyContent">'+
                                                      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                                                      'sandstone rock formation in the southern part of the '+
                                                      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                                                      'south west of the nearest large town, Alice Springs; 450&#160;km '+
                                                      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                                                      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                                                      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                                                      'Aboriginal people of the area. It has many springs, waterholes, '+
                                                      'rock caves and ancient paintings. Uluru is listed as a World '+
                                                      'Heritage Site.</p>'+
                                                      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                                                      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                                                      '(last visited June 22, 2009).</p>'+
                                                      '</div>'+
                                                      '</div>';

                                  var contentString2 = '<div style="width: 400px; height: 300px; position: absolute; top: 0px; left: 0px;">' +
                                                       '<div class="panel panel-green">' +
                                                       '<div class="panel-heading">' +
                                                       'Green Panel' +
                                                       '</div>' +
                                                       '<div class="panel-body">' +
                                                       '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>' +
                                                       '</div>' +
                                                       '<div class="panel-footer">' +
                                                       'Panel Footer' +
                                                       '</div>' +
                                                       '</div>' +
                                                       '</div>';

                                   var contentString3 = '<div id="content">'+
                                                       '<div id="siteNotice">'+
                                                       '</div>'+
                                                       '<div id="bodyContent">'+
                                                       '<p>' +
                                                       '<iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 100%; display: block; padding: 0px; margin-top:0px;"></iframe>' +
                                                       '</p>'+
                                                       '</div>'+
                                                       '</div>';

                                  var contentString4 = '<div style="width: 94.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>"You feild"</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:90%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;">]]..product_list[i].category..[[</div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">"You feild"</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>';

                                  var contentStrin5 = '<div style="width: 400px; height: 300px; ; top: 0px; left: 0px; text-align: center; font-size: 1.2em; font-family: monospace;">' +
                                                      '	แยกรัชดา-ราชพฤกษ์ ' +
                                                      '<iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 100%; display: block; padding: 0px; margin-top:0px;  position: absolute; left: 5px; top: 26px; "></iframe>' +
                                                      '</div>';

                                  var infowindow = new google.maps.InfoWindow({
                                    content: contentStrin5,
                                    minWidth: 400
                                  });

                                  var marker1 = new google.maps.Marker({
                                    position: {lat: 13.709261, lng: 100.406856},
                                    icon: 'images/pin-right.png',
                                    map: map
                                  });

                                  marker1.addListener('click', function() {
                                    map.setZoom(15);
                                    map.setCenter(marker1.getPosition());
                                    infowindow.open(map, marker1);
                                  });

                                  // The mall bangkae
                                  var marker = new google.maps.Marker({
                                    position: {lat: 13.712067, lng: 100.407997},
                                    icon: 'images/pin-right.png',
                                    map: map
                                  });

                                  // lotus bangkae
                                  marker = new google.maps.Marker({
                                    position: {lat: 13.712141, lng: 100.418773},
                                    icon: 'images/pin-right.png',
                                    map: map
                                  });

                                  // Kasemraj H. Bangkae
                                  marker = new google.maps.Marker({
                                    position: {lat: 13.710515, lng: 100.398602},
                                    icon: 'images/pin_camera_flood.png',
                                    map: map
                                  });

                                  marker = new google.maps.Marker({
                                    position: {lat: 13.710446, lng: 100.403548},
                                    icon: 'images/pin-right.png',
                                    map: map
                                  });

                                  marker = new google.maps.Marker({
                                    position: {lat: 13.711718, lng: 100.420758},
                                    icon: 'images/pin-right.png',
                                    map: map
                                  });
                                }

                                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                  infoWindow.setPosition(pos);
                                  infoWindow.setContent(browserHasGeolocation ?
                                                        'Error: The Geolocation service failed.' :
                                                        'Error: Your browser doesn\'t support geolocation.');
                                  infoWindow.open(map);
                                }
                              </script>
                              <script async defer
                              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXmBAbKo2r8gHO29R5DKOBbO33R4aJafs&callback=initMap">
                              </script>
                          </div>
                          <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center" >
                                  <i class="fa fa-video-camera"></i> แยกรัชดา-ราชพฤกษ์
                                </div>
                                <div class="panel-body" style="padding: 8px; padding-left: 0px;">
                                  <p>
                                    <iframe id="camera-info" src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                  </p>
                                </div>
                                <div class="panel-footer">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <form>
                                          <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">ชื่อกล้อง</label>
                                            <div class="col-sm-8">แยกรัชดา-ราชพฤกษ์
                                              <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">พิกัด</label>
                                            <div class="col-sm-8">
                                              13.711718, 100.420758
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">สถานะการบันทึก</label>
                                            <div class="col-sm-8">
                                              <i class="fa fa-circle " style="color: green; "></i> active
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="" class="col-sm-8 col-form-label">ดูภาพย้อนหลัง</label>
                                          </div>
                                          <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">ณ วันที่</label>
                                            <div class="col-sm-8">
                                              <div class="form-group input-group" style="margin-bottom: 0px;">
                                                <input type="text" class="form-control" placeholder="13-09-2017">
                                                <span class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">ช่วงเวลา</label>
                                            <div class="col-sm-8">
                                              <div class="form-group input-group">
                                                <input type="text" class="form-control" placeholder="01:00">
                                                <span class="input-group-addon">
                                                  ถึง
                                                </span>
                                                <input type="text" class="form-control" placeholder="14:00">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <video style="width: 100%;" controls controlsList="nodownload"></video>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">บันทึกภาพนิ่ง <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-camera"></i></button></label>
                                            <label class="col-sm-6 col-form-label"><a target="_blank" href="#" style="cursor: pointer;"><i class="fa fa-image" ></i> &nbsp; download </a></label>
                                            <!-- <div class="col-sm-12">
                                              <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTVlZTZjYTM1ZDAgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWVlNmNhMzVkMCI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS40Ij4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                                            </div> -->
                                          </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>

                          </div>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="camview">
                        <p>
                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                               <div class="panel-heading text-center">
                                 <i class="fa fa-video-camera"></i> แยกเศรษฐศิริ
                               </div>
                               <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                 <p style="margin: 0px;">
                                   <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                 </p>
                          			</div>
                             </div>
                          </div>

                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                              <div class="panel-heading text-center">
                                <i class="fa fa-video-camera"></i> แยกรัชดา-ราชพฤกษ์
                              </div>
                               <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                 <p style="margin: 0px;">
                                   <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                 </p>
                          			</div>
                             </div>
                          </div>

                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                                   <div class="panel-heading text-center">
                                     <i class="fa fa-video-camera"></i> สะพานลอยหน้า โรงพยาบาลพญาไท 2 ถนนพหลโยธิน
                                   </div>
                                   <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                     <p style="margin: 0px;">
                                       <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                     </p>
                              			</div>
                               </div>
                          </div>

                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                                   <div class="panel-heading text-center">
                                     <i class="fa fa-video-camera"></i> สะพานลอยใกล้ซอยวงศ์สว่าง 21 ถนนวงศ์สว่าง
                                   </div>
                                   <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                     <p style="margin: 0px;">
                                       <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                     </p>

                              			</div>
                               </div>
                          </div>

                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                                   <div class="panel-heading text-center">
                                     <i class="fa fa-video-camera"></i>	สะพานลอยใกล้ โรงเรียนสามเสนวิทยาลัย
                                   </div>
                                   <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                     <p style="margin: 0px;">
                                       <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                     </p>

                              			</div>
                               </div>
                          </div>

                          <div class="col-sm-4">
			                      <div class="panel panel-primary">
                                   <div class="panel-heading text-center">
                                     <i class="fa fa-video-camera"></i>	แยกพหลโยธิน 2 (ใกล้ บ.ไทยเบปเวอร์เรจ จำกัด)
                                   </div>
                                   <div class="panel-body" style="padding: 0px 9px 9px 0px;" >
                                     <p style="margin: 0px;">
                                       <iframe src="http://www.bmatraffic.com/PlayVideo.aspx?ID=35" scrolling="no" frameborder="0" style="width: 100%; height: 270px; display: block; padding: 0px; margin-top:0px;"></iframe>
                                     </p>

                              			</div>
                               </div>
                          </div>
                        </p>
                        <p>
                          <div class="col-sm-12">
                            <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td></td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td></td>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td></td>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td></td>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td></td>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td></td>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td></td>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td></td>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td></td>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td></td>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td></td>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td></td>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td></td>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td></td>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td></td>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td></td>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td></td>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td></td>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td></td>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td></td>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td></td>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td></td>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td></td>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td></td>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td></td>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td></td>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
                          </div>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>

@stop

@push('scripts')
<script>
  $(document).ready(function() {
    $('#example').DataTable({
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]],
        pageLength: 100
    });
  });
</script>
@endpush
