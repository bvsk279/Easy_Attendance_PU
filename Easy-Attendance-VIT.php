<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.zopamo.com/Easy-Attendance-VIT"/>
    <title>Easy Attendance - A Tool Dedicated to vit University Faculty.</title>
    <meta name="description" content="Easy Attendance Tool helps in merging the Attendance Sheets downloaded from Microsoft TEAMS with Enrollment Sheets of respective classes. You get a whole list of Students who are Present/Absent for the Class Session (Sorted by Register No's)."/>
    <meta name="Keywords" content="Attendance tool vit, vit Attendance, Automated Attendance vit, VTOP Attendance" />
    <meta name="robots" content= "index, follow">

    <!-----open Graph Tags------>
    <meta property="og:title" content="Easy Attendance - A Tool Dedicated to vit University Faculty." />
    <meta property="og:description" content="The Tool helps in merging the Attendance Sheets downloaded from MS TEAMS with Enrollment Sheets of respective classes. It get all attendees & Absentees to your Class." />
    <meta property="og:url" content="https://zopamo.com/Easy-Attendance-VIT" />
    <meta property="og:image" content="https://zopamo.com/Easy-Attendance-vit/img/og-image0524.jpg" />
    <!-----open Graph Tags END------>


    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://zopamo.com/Easy-Attendance-vit/styles/styles.css">
    <link rel="stylesheet" type="text/css" href="https://zopamo.com/Easy-Attendance-vit/styles/responsive.css">
    
</head>
<body>

    <div class="header">
        <div class="pagelogo vertical-center">
            <!--Store Name-->Zopamo<br class="responsive">
            <span>Easy Attendance | vit</span>
        </div>
    </div>
    <div id="sidebar">
        <ul>
            <h2>Zopamo</h2>
          <a href="#top"><img width="25px" height="25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABd0lEQVRoge2ZPU7DQBBGH4g6XSyokDgXByC5QFqXORkHACRqypzCFGB5Fdn7MzNrj6J9kqU0+808reOdONC4fQbh9QV0G/S7iFRkAL6Bp/VbnmdsSrLGlYxG5BNHt5lGZA984GRnNCLgSEYrAk5kLETAgYz2qRU7Zxa5K24zr6nS7FzxxcyHgmI1SUknRe+NGtmcJmJIBxy2bmKOkqdWxzSWHI0yzYgVPQefr8+JR2FmNWJFB/5kSiRSmdVIiQzAhWnazZly1SKaH0nPibxLpkS4ToxG5Ad4SeSdycNMpIQd8P6/7m0hL7z6Sn2YBOyAV01hoz7sAoxI9uHhZDdhbZEDG71UyL21eua/yCFHprNjX6kPk4ATcZHwNJdeYkoHwPHEXlrXFTa+ukg4xYYymkxTcorODYDjbSbNNCdVNNyJ6wGwF2ZWIVU0fBKtNgBKyClaeja4FfGQ2UYUdzQRbzQRbzQRbzQRb+T+Y+XhTUqUm9mRhjd+ARyUFDvheVe9AAAAAElFTkSuQmCC" alt="Merge Icon">&nbsp;&nbsp;&nbsp;Merge Tool</a>
          <a href="#How-to-work-with-tool"><i class="far fa-question-circle"></i>&nbsp;&nbsp;&nbsp;How it Works</a>
          <a href="#dev-info"><i class="fas fa-code"></i>&nbsp;&nbsp;&nbsp;Dev Info</a>
        </ul>    
    </div>
    <div id="sidebar-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    

    <div class="content">
        <h2 style="text-align: center;" class="mission-head">To Enrich the lives of our vit Faculty. </h2>
        
        <div class="tool-box">
            <div id="refresh-btn" onclick="location.href='https://zopamo.com/Easy-Attendance-VIT';">Refresh</div>
            <div class="legend">Easy Attendance Tool</div>
            <form method='post' enctype='multipart/form-data' id="merger-form" action="#merger-form" name="form1">
                <br/>
                <label>How did you take Attendance&nbsp;<span class="red">*</span></label><br/>
                    <!-- <input type="radio" name="att-type" id="att-type-one" value="download" disabled>&nbsp;&nbsp;<label for="att-type-one" class="ans-label">Downloaded&nbsp;from&nbsp;Teams</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="poll" id="att-type-two" name="att-type" required>&nbsp;&nbsp;<label for="att-type-two" class="ans-label">Used&nbsp;Poll&nbsp;From&nbsp;Teams</label><br/><br/><br/>

                <label>Class Attendance List (Poll Answer Excel Sheet)&nbsp;<span class="red">*</span></label><br/>
                <div class="fileUploadContainer" for="excel1">
                    &nbsp;<input type="file" name="excel1" id="excel1" class="fileToUpload" accept=".xls,.xlsx" required>
                    <p class="format-guide">Accepted Formats:&nbsp;&nbsp;.xls&nbsp;&nbsp;.xlsx</label>
                </div>
                <br/><br/><br/>

                <label>Class Enrollment List&nbsp;<span class="red">*</span></label><br/>
                <div class="fileUploadContainer">
                    &nbsp;<input type="file" name="excel2" id="excel2" class="fileToUpload" accept=".xls,.xlsx" required>
                    <p class="format-guide">Accepted Formats:&nbsp;&nbsp;.xls&nbsp;&nbsp;.xlsx</label>
                </div>
                <br/><br/><br/>
                

                <div class="btn-block"><button class="merge-btn" onclick="merge()" name="merge_submit">Merge Lists </button>&nbsp;<img width="25px" height="25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABd0lEQVRoge2ZPU7DQBBGH4g6XSyokDgXByC5QFqXORkHACRqypzCFGB5Fdn7MzNrj6J9kqU0+808reOdONC4fQbh9QV0G/S7iFRkAL6Bp/VbnmdsSrLGlYxG5BNHt5lGZA984GRnNCLgSEYrAk5kLETAgYz2qRU7Zxa5K24zr6nS7FzxxcyHgmI1SUknRe+NGtmcJmJIBxy2bmKOkqdWxzSWHI0yzYgVPQefr8+JR2FmNWJFB/5kSiRSmdVIiQzAhWnazZly1SKaH0nPibxLpkS4ToxG5Ad4SeSdycNMpIQd8P6/7m0hL7z6Sn2YBOyAV01hoz7sAoxI9uHhZDdhbZEDG71UyL21eua/yCFHprNjX6kPk4ATcZHwNJdeYkoHwPHEXlrXFTa+ukg4xYYymkxTcorODYDjbSbNNCdVNNyJ6wGwF2ZWIVU0fBKtNgBKyClaeja4FfGQ2UYUdzQRbzQRbzQRbzQRb+T+Y+XhTUqUm9mRhjd+ARyUFDvheVe9AAAAAElFTkSuQmCC" alt="Merge Icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-check" id="on-merge-fire"></i><br class="responsive"><span class="red" id="validate-warning" style="font-size: 15px;"></span></div>
                <br/><br/>
                
                <div class="container" id="merge-ext-sec">
                    <div class="row">
                        <div class="col-fifty"><button class="merge-btn-ext" onclick="exportToExcel('Attendance-List', getFileName()); return false"><span>Download</span>&nbsp;&nbsp;&nbsp;<i class="fas fa-file-download"></i></button></div>
                        <div class="col-fifty" id="tbl-view-btn"><button class="merge-btn-ext" id="table-view-tgl" onclick="return false"><span>View Sheet</span>&nbsp;&nbsp;&nbsp;<i class="fas fa-eye"></i></button></div>
                        <div class="col-fifty" id="tbl-hide-btn"><button class="merge-btn-ext" id="table-hide-tgl" onclick="return false"><span>Hide Sheet</span>&nbsp;&nbsp;&nbsp;<i class="fas fa-eye-slash"></i></button></div>
                    </div>
                </div>
                <script src="https://zopamo.com/Easy-Attendance-vit/js/body.js"></script>
            </form>
        </div>
    </div>

<?php
    require_once 'Easy-Attendance-vit/Classes/PHPExcel.php';
    


    if (isset($_POST['merge_submit'])){

    $excel1 = PHPExcel_IOFactory::load($_FILES['excel1']['tmp_name']);
    $excel2 = PHPExcel_IOFactory::load($_FILES['excel2']['tmp_name']);

    echo "<script>mergeExt.style.display = 'block';</script>";
    echo "<script>document.getElementById('on-merge-fire').style.display = 'inline-block';</script>";

	//set active sheet to first sheet
    $excel1->setActiveSheetIndex(0);
    $excel2->setActiveSheetIndex(0);


    $attendeeCount = $excel2->getActiveSheet()->getHighestRow();
    
    

    $i = 2;

    echo "<div class='table-content' id='stats-tbl'>";
    echo "<table class='att-tbl' id='att-counter-tbl'>
            <tr>
                <th>Attendees</td>
                <th>Absentees</td>
            </tr>
            <tr>
                <th id='att-count-cell' style='color: rgb(0, 255, 0);'> </th>
                <th id='abs-count-cell' style='color: rgb(255, 123, 0);'> </th>
            </tr>
        </table>
        </div>
        <br/>";

    echo "<div class='table-content' id='Att-List-tbl'>";
    echo "<table border='1' id='Attendance-List' class='att-tbl'>";

	//first row of data series
	

    echo "
    <tr style='font-weight: 600'>
        <th>ID</th>
        <th>REGISTER NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>Status</th>
    </tr>
";


    //loop until the end of data series(cell contains empty string)
    $total_count = 0;
    $attended_count = 0;
    $abs_count = 0;

	while( $excel2->getActiveSheet()->getCell('A'.$i)->getValue() != ""){
		//get cells value
        $Name =	strval($excel2->getActiveSheet()->getCell('B'.$i)->getValue());
        $Email = strval($excel2->getActiveSheet()->getCell('C'.$i)->getValue());
        $vi = 0;
        
        for ($vi = 2; $vi <= $attendeeCount+2; $vi++){

            if(($Email == strval(($excel1->getActiveSheet()->getCell('D'.$vi)->getValue())))){
                
                $rID =	    $excel1->getActiveSheet()->getCell('A'.$vi)->getValue();
                $rRegno =	$excel2->getActiveSheet()->getCell('A'.$i)->getValue();
                $rName =	$excel2->getActiveSheet()->getCell('B'.$i)->getValue();
                $rEmail =	$excel2->getActiveSheet()->getCell('C'.$i)->getValue();
                $total_count +=1;
                $attended_count += 1;
                echo "
                    <tr>
                        <td>".$total_count."</td>
                        <td>".$rRegno."</td>
                        <td>".$rName."</td>
                        <td>".$rEmail."</td>
                        <td class='green'>Present</td>         
                    </tr>
                ";
            break;
            
            }


            if(($Email != strval(($excel1->getActiveSheet()->getCell('D'.$vi)->getValue())))&&($vi==$attendeeCount+2)){
                $ab_ID =	    $excel1->getActiveSheet()->getCell('A'.$vi)->getValue();
                $ab_Regno =	    $excel2->getActiveSheet()->getCell('A'.$i)->getValue();
                $ab_Name =	    $excel2->getActiveSheet()->getCell('B'.$i)->getValue();
                $ab_Email =	    $excel2->getActiveSheet()->getCell('C'.$i)->getValue();
                $total_count +=1;
                $abs_count += 1;

                echo "
                    <tr style='background-color: #d4d4d4'>
                        <td>".$total_count."</td>
                        <td>".$ab_Regno."</td>
                        <td>".$ab_Name."</td>
                        <td>".$ab_Email."</td>
                        <td class='red'>Absent</td>         
                    </tr>
                ";
            }


        }
        
		//and DON'T FORGET to increment the row pointer ($i)
        $i++;
        
    }
    echo "</table>";
    echo "</div>";


    //Attendance Stats
    ?>
    <script>
        function counter(){
            document.getElementById("att-count-cell").innerHTML = "<?php echo $attended_count; ?>";
            document.getElementById("abs-count-cell").innerHTML = "<?php echo $abs_count; ?>";
        }
        counter();
    </script>
<?php
}
?>

    <div class="procedure" id="How-to-work-with-tool">
        <hr class="hr-text" data-content="How it Works?">
        <div id="how-it-works">
            <!-- --------------Notification Section--------------- -->
            <div class="notify">
                <div class="notify-msg">
                    <h4><span class="red">Notification  </span><span>(From Faculty View Point)</span></h4>
                    <p>During Covid-19, As a faculty of vit. We stated Teaching via Online, chose Microsoft Teams as a medium to run online classes. 
                        We Chose few methods to take attendance. </p>
                    <ul>
                        <li>Download Attendance From Teams.</li>
                        <li>Run a Poll.</li>
                    </ul><br/>
                    <p> If you take attendance in any of the above way. You got to the right tool.</p><br/>
                    <p>When Downloading Attendance or Taking Poll we don’t get student’s Reg.no’s in the downloaded excel right!. Don’t Worry, This tool will let you save some time by generating attendees Registration Numbers (sorted). There after you can proceed entering Attendance to vtop easily.<br/>Follow Steps below to continue.&nbsp;&nbsp;<i class="fas fa-hand-point-down arrow1"></i></p>
                </div>
            </div>  
            <!-- --------------------Notification END----------------- -->


            <!-- <h3 style="text-align: center">How it Works?</h3> -->
            <div class="steps">
                <dl>
                    <dt>Step 1</dt>
                    <dd>Ensure you have the <b>Poll Answer Excel Sheet</b>(from MS Teams) in .xlsx Format in the following fashion.</dd>
                    <img src="https://zopamo.com/Easy-Attendance-vit/img/Poll-Answer-Sheet-Teams.png" alt="Poll Answer Sheet in Microsoft Teams Teams" width="600px" height="auto"><br/>
                    <dt>Step 2</dt>
                    <dd>You are supposed to have the <b>Class Enrollment Sheet</b> Containing all the Students(Reg.No, Name, Vit Mail ID) from the priticular class!! in .xlsx Format in the following fashion.</dd>
                    <img src="https://zopamo.com/Easy-Attendance-vit/img/Class-Enrollment-List.png" alt="Class Enrollment List vit" width="600px" height="auto">
                    <dd>Create a sheet similar to above and save it. It can be reused for the respective class as many times you use Easy Attendance Tool.</dd><br/>
                    <dt>Step 3</dt>
                    <dd>Now, Make sure all the columns in the respective sheets are in the same order as in above pictures.<br/>
                        <ul type="1">
                            <li>Poll Answer Sheet (<span class="mark-blue">ID | Start time | Completion time | Email | Name | Question</span>).</li>
                            <li>Enrollment Sheet (<span class="mark-blue">Student's Reg.No | Name | Vit Mail ID</span>).</li>
                        </ul>
                        As well chech if Both the Excel Sheets are with same format(.xls / .xlsx). You Should now be Ready to use the tool.</dd><br/>
                    <dt>Step 4</dt>
                    <dd>Go to the <a href="#top">Tool</a>, Choose the Poll Answers File at Attendance List. & Choose the Class Enrollment List in the respective section.</dd><br/>
                    <dt>Step 5</dt>
                    <dd>Click Merge Button. Now, View/Download the Atteendance Sheet with Registar Numbers (sorted).</dd>
                </dl>
            </div>
        </div>
    </div>
    <br/>
    <h3 style="text-align: center"> Happy Saving Your Valuable Time!</h3>
    <br/>
    

    <style>
            
    
        </style>
        <!-- -----------popup report form------------- -->
        <div class="popup-form" id="report-error-form">
            <div class="relative">
                <form class="contact-us-form" method="POST">
                    <div class="close" id="close-report-form">x</div>
                    <h3 style="text-align: center">Reporting Error!</h3>

                    <label for="rep-name">Name&nbsp;<span class="red">*</span></label><br/>
                    <input type="text" name="rep-name" required><br/>

                    <label for="rep-email">Email&nbsp;<span class="red">*</span></label><br/>
                    <input type="tel" name="rep-email" required><br/>

                    <label for="rep-msg">Message</label><br/>
                    <textarea cols="40" rows="10" name="rep-msg" placeholder="Describe Error with its location."></textarea><br/>

                    <input type="submit" name="submit-report" value="Report">
                </form>
                <?php require 'Easy-Attendance-vit/php-assets/ReportError.php';?>
            </div>
        </div>
        <!-- -----------END-----Popup form-----END------ -->


        <!-- -----------popup Thankyou form------------- -->
        <div class="popup-form" id="thankyou-form">
            <div class="relative">
                <form class="contact-us-form" method="POST">
                    <div class="close" id="close-thanks-form">x</div>
                    <h3 style="text-align: center">Thankyou! From</h3>

                    <label for="tq-name">Name&nbsp;<span class="red">*</span></label><br/>
                    <input type="text" name="tq-name" required><br/>

                    <label for="tq-email">Email&nbsp;<span class="red">*</span></label><br/>
                    <input type="email" name="tq-email" required><br/>

                    <label for="tq-phone">Mobile Number&nbsp;</label><br/>
                    <input type="tel" name="tq-phone"><br/>

                    <label for="tq-msg">Message</label><br/>
                    <textarea cols="40" rows="10" name="tq-msg" placeholder="Remember! short and sweet please."></textarea><br/>

                    <input type="submit" name="tq-form-submit" value="Send">
                </form>
                <?php require 'Easy-Attendance-vit/php-assets/SayThankyou.php';?>
            </div>
        </div>
        <!-- -----------END-----Popup form-----END------ -->

        <div class="row" id="dev-info">
            <div class="container">
                <div class="col-fifty"> <button id="report-btn" class="ack-btn">Report Error!</button> </div>
                <div class="col-fifty"> <button id="thankyou-btn" class="ack-btn">Say Thankyou</button> </div>
            </div>
        </div><br/><br/>
        
        



    <div class="footer">
        <p class="copyright">2020 &copy; Zopamo&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Made With <span class="red" style="font-size: 20px"><i class="fas fa-heart"></i></span> to vit Faculty.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://zopamo.com/Easy-Attendance-vit/js/script.js"></script>
</body>

</html>