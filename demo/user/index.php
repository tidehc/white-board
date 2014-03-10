<?php include './header.php'; ?>
<h5 class="text-center">Dashboard</h5><hr>
<div class="row">
	<div class="col-sm-6">
		<h6>Search for Courses</h6>
		<b><a href="./search.php">View all >></a><hr>
		<div class="form-group">
	       	<div class="input-group input-group-lg">
	            <input class="form-control" id="appendedInputButton-02" type="search" placeholder="Search" data-provide="typeahead" data-items="8" data-source='["Signature Care 2014 Recertification","Signature Care Program","Signature Organic Program","Safety Training"]'>
	            <span class="input-group-btn">
	            	<button class="btn btn-default" type="button"><span class="fui-search"></span></button>
	            </span> 
	        </div> <!--end input-->  
        </div> <!--end form group-->    
	</div>
	<div class="col-sm-6">
		<h6>Your Courses</h6>
		<b><a href="./courses.php">View all >></a><hr>
		<ul style="font-size:12px; list-style-type: none;" >
		<li>
			<b>
				Signature Care 2014
			</b>
			<i class="pull-right">
				<b class="text-success">
					Complete
				</b>
				98%
			</i>
			<br>
			<p style="font-size:12px;">
				This course is all about testings things in the test world, test test is the test inside this really nice test course.
			</p>
		</li>
		<li>
			<b>
				Saftey Training
			</b>
			<i class="pull-right">
				<b class="text-danger">
					Pending
				</b>
				72%
			</i>
			<br>
			<p style="font-size:12px;">
				This course is all about testings things in the test world, test test is the test inside this really nice test course.
			</p>
		</li>
		<li>
			<b>
				Hazzard Communication Standard
			</b>
			<i class="pull-right">
				<b class="text-warning">
					Not Started
				</b>
				0%
			</i>
			<br>
			<p style="font-size:12px;">
				This course is all about testings things in the test world, test test is the test inside this really nice test course.
			</p>
		</li>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<h6>Transcripts</h6>
		<b><a href="./transcripts.php">View all >></a><hr>
			<div class="table-responsive">
	        	<table class="table table-striped table-hover">
	            <thead>
	              <tr style="font-size:12px;">
	                <th>Course</th>
	                <th>Date Enrolled</th>
	                <th>Current Score</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr style="font-size:12px;">
	                <td><a href="#"><i class="fa fa-tablet"></i> Communications Training</a></td>
	                <td>1/4/2014</td>
	                <td>
	                	<i>95% <br><b class="text-success">Complete</b></i>
	                </td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td><a href="#"><i class="fa fa-tablet"></i> Safety 2014 Certificate</a></td>
	                <td>1/12/2014</td>
	                <td>
	                	<i>72% <br><b class="text-danger">Pending</b></i>
	                </td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td><a href="#"><i class="fa fa-sitemap"></i> Signature Care 2014 Program</a></td>
	                <td>1/27/2014</td>
	                <td>
	                	<i>90% <br><b class="text-success">Complete</b></i>
	                </td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td><a href="#"><i class="fa fa-tablet"></i> Hazzard Communication Standard</a></td>
	                <td>2/5/2014</td>
	                <td>
	                	<i>0% <br><b class="text-warning">Not Started</b></i>
	                </td>
	              </tr>
	            </tbody>
	          </table>
        	</div>
	</div>
	<div class="col-sm-6">
		<h6>Certifications</h6>
		<b><a href="./certifications.php">View all >></a><hr>
            <div class="table-responsive">
	        	<table class="table table-striped table-hover">
	            <thead>
	              <tr style="font-size:12px;">
	                <th>CertID</th>
	                <th>Name</th>
	                <th>Date Achieved</th>
	                <th>Score</th>
	                <th>Print</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr style="font-size:12px;">
	                <td>789</td>
	                <td><a href="#">Safety 2014 Certificate</a></td>
	                <td>2/2/2014</td>
	                <td><i>95%</i></td>
	                <td><a href="#"><img src="./images/icons/printer.svg" height="30px"></a></td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td>457</td>
	                <td><a href="#">Communications Standard</a></td>
	                <td>1/13/2014</td>
	                <td><i>93%</i></td>
	                <td><a href="#"><img src="./images/icons/printer.svg" height="30px"></a></td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td>675</td>
	                <td><a href="#">Safety 2014 Certificate</a></td>
	                <td>1/3/2014</td>
	                <td><i>100%</i></td>
	                <td><a href="#"><img src="./images/icons/printer.svg" height="30px"></a></td>
	              </tr>
	              <tr style="font-size:12px;">
	                <td>127</td>
	                <td><a href="#">Safety 2014 Certificate</a></td>
	                <td>12/28/2013</td>
	                <td><i>82%</i></td>
	                <td><a href="#"><img src="./images/icons/printer.svg" height="30px"></a></td>
	              </tr>
	            </tbody>
	          </table>
        	</div>
	</div>
</div>
<?php include './footer.php'; ?>