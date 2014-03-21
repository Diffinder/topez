<html>

<head>
	<title>BackBench</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>

<body>
	<div id="bb" class="bb">
		<div id="bb_top_margin" class="bb_top_margin">
			<div id="cc_title" class="cc_title">
					Class Champ :
			</div>
			<div id="cc_name" class="cc_name">
					Rakesh Vaddadi
			</div>
			<div id-"cls_title" class="cls_title">
					Computer Science -
			</div>
			<div id-"cls_name" class="cls_name">
					2010
			</div>
			<div id="stu_count" class="stu_count">
				<div id="ol_count" class="ol_count">
					<div id="ol_count_title" class="ol_count_title">
						Ol&nbsp;Strength&nbsp;:
					</div>
					<div id="ol_count_num" class="ol_count_num">
						25
					</div>
				</div>
				<div id="total_count" class="total_count">
					<div id="total_count_title" class="total_count_title">
						Total&nbsp;Strength&nbsp;:
					</div>
					<div id="total_count_num" class="total_count_num">
						45
					</div>
				</div>
			</div>
		</div>
		<div id="bb_top_margin_end" class="bb_top_margin_end">
		</div>
		<div id="bb_wall" class="bb_wall">
		</div>
	</div>
	<div id="status_update" class="status_update">
    <div class="row">
    <div class="col-md-6 update_text">
        
        <form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
            <!-- <ul class="post-types">
                <li class="post-type">
                    <a class="status" title="" href="#"><i class="glyphicon glyphicon-file"></i> Share an Update</a>
                </li>
                <li class="post-type">
                    <a class="photos" href="#"><i class="glyphicon glyphicon-camera"></i> Add photos</a>
                </li>
            </ul> -->
            <div class="share" id="share">
                <!-- <div class="arrow"></div> -->
                <div id="fb-panel" class="panel panel-default" style="margin-top:5px;margin-left:-5px;">
                      <div class="panel-heading"><i class="fa fa-file"></i><i class="glyphicon glyphicon-pencil" onClick="showBox();" style="cursor:pointer;"></i>&nbsp;Scribble on Board</div>
                      <div class="panel-body" id="panel-body" style="display:none;">
                        <div class="">
                            <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="Let's Scribble on Black Board..."></textarea> 
                        </div>
                      </div>
                        <div class="panel-footer" id="panel-footer" style="display:none;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-map-marker"></i> Location</button>
                                              <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-picture"></i> Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group" style="float:right;margin-right:5px;">
                                            <select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
                                                <option value="1" selected="selected">Public</option>
                                                <option value="2">Only my friends</option>
                                                <option value="3">Only me</option>
                                            </select>                                    
                                            <input type="submit" name="submit" value="Post" class="btn btn-primary">                               
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
            </div>
        </form>
    </div>
    </div> 
	</div>
    <button type="submit" id="showBtn" class="btn btn-default" onClick="resize();">Open Closet</button>
     <h3 class="tickerhdng" >Latest News <b>:</b></h3>
    <div class="ticker">
    <ul id="ticker" class="tickerul">
        <li class="ticker1">Dummy data is benign information that does not contain any useful data, but serves to reserve spac...</li>
        <li class="ticker1">For testing, dummy data can also be used as stubs or pad to avoid software testing iss...</li>
        <li class="ticker1">In operational use, dummy data may be transmitted for OPSEC purposes.</li>
        <li class="ticker1">Dummy data must be rigorously evaluated and documented to ensure that it does no...</li>
        <li class="ticker1">The topic of this article may not meet Wikipedia's general notability guideline.</li>
        <li class="ticker1">asdadgsa abhasgv sda</li>
    </ul>
    </div>
<script type="text/javascript">
        
        var j=1;
        function resize()
        {
            if(j)
            {
             document.getElementById('bb').style.width = 724;
             document.getElementById('fb-panel').style.width = 724;
             document.getElementById('share').style.width = 724;

                j =0;
            }
            else
            {
                document.getElementById('bb').style.width = 1024;
         document.getElementById('fb-panel').style.width = 1024;
         document.getElementById('share').style.width = 1024;
            j =1;
            }
        }
        var i=1;
        function showBox()
        {
            if(i)
            {
            document.getElementById('panel-body').style.display = "block";
            document.getElementById('panel-footer').style.display = "block";
            i=0;
            }
            else
            {
               document.getElementById('panel-body').style.display = "none";
                document.getElementById('panel-footer').style.display = "none";
                i = 1; 
            }
        }
    </script>
</body>

</html>