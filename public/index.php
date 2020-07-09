<!DOCTYPE html>
    <head>
        <title>FCRIT | Admission Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet/main.css">
        <link rel="icon" href="images/fcritlogo.png" type="image/png" sizes="16x16"> 
        <meta name="author" content="Prateesh R K">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">

            <div class="jumbotron">
                <div>
                    <img src="images/fcritlogo.png" class="float-left" width="100">
                    <h2 class="display-5 text-center">Fr. CONCEICAO RODRIGUES INSTITUTE OF TECHNOLOGY</h2>
                    <p class="lead text-center">Sector-9A, Vashi, Navi Mumbai 400703</p>
                </div>
                <hr class="my-4">
                <h2 class="display-6 text-center">Application for Admission to First Year Engineering<br>Degree Course for the A.Y. 2020-21</h2>
            </div>

            <form action="send_data.php" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="col-md-3">
                        <h5 class="h5">Courses Applied For:</h5>
                        <small class="form-text text-muted">Write course code in order of preference</small>
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control" id="choice1" name="choice1" placeholder="1" required>
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control" id="choice2" name="choice2" placeholder="2">
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control" id="choice3" name="choice3" placeholder="3">
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control" id="choice4" name="choice4" placeholder="4">
                    </div>
                    <div class="col-md-1">
                        <input type="text" class="form-control" id="choice5" name="choice5" placeholder="5">
                    </div>
                    <h6 class="h6">(M – Mechanical;  E – Electrical;  EX – Electronics & Telecom.;  C – Computer;  IT – Information Technology)</h6>
                

                    <div class="col-md-4">
                        <!-- Uploaded image area-->
                        
                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        <p class="font-italic text-gray text-center">Upload a recent passport size colour photograph</p>
                        <input id="upload" type="file" name="img" onchange="readURL(this);" class="form-control border-0">
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-primary m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2"></i><small class="text-uppercase font-weight-bold">Upload Photograph</small></label>
                        </div>
                    </div>


                </div>
                <br>
                <br>
                <h4 class="h4">I. Details of Candidate</h4>
                <div class="form-group">
                    <label for="studentName">1. Name</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" required placeholder="Surname           First Name          Middle/Father's Name">
                    <small class="form-text text-muted">As per SSC Marksheet</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="address">2. Correspondance Address</label>
                    <textarea class="form-control" id="address" name="address" rows="2" required placeholder="Enter your correspondance address"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="permanentAddress">3. Permanent Address</label>
                    <textarea class="form-control" id="permanentAddress" name="permanentAddress" required rows="2" placeholder="Enter your permanent address"></textarea>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="permanentAddress">4. Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required placeholder="DD/MM/YYYY">
                    </div>
                    <div class="col">
                        <label for="birthPlace">5. Place of Birth</label>
                        <input type="text" class="form-control" id="birthPlace" name="birthPlace" required placeholder="Where were you born?">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="gender">6. Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Non-Binary">Non-binary</option>
                                <option value="Transgender">Transgender</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="bloodgrp">7. Blood Group</label>
                            <select class="form-control" id="bloodgrp" name="bloodgrp" required>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="aadhar">8. Aadhar No.</label>
                        <input type="number" class="form-control" id="aadhar" name="aadhar" required placeholder="Enter your 12-digit Aadhar No.">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="category">9. Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="gen">GEN</option>
                                <option value="obc">OBC</option>
                                <option value="sc">SC</option>
                                <option value="st">ST</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="caste">10. Sub Caste</label>
                        <input type="text" class="form-control" id="caste" name="caste" placeholder="Your caste">
                    </div>
                    <div class="col">
                        <label for="religion">11. Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion" placeholder="Your religion">
                    </div>
                    <div class="col">
                        <label for="domicile">12. Maharashtra Domicile</label>
                        <div class="form-group">
                                <select class="form-control" id="domicile" name="domicile" required>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="nationality">13. Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Your nationality" required>
                    </div>
                    <div class="col">
                        <label for="emailid">14. E-mail ID</label>
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="example@technity.net" required>
                    </div>
                    <div class="col">
                        <label for="capId">15. CAP App. ID</label>
                        <input type="text" class="form-control" id="capId" name="capId" placeholder="Your CAP Application ID">
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">II. Details of Parents</h4>
                <div class="form-row">
                    <div class="col">
                        <label for="fName">Father's Name</label>
                        <input type="text" class="form-control" id="fName" name="fName" placeholder="Enter your father's name" required>
                    </div>
                    <div class="col">
                        <label for="fOccupation">Occupation</label>
                        <input type="text" class="form-control" id="fOccupation" name="fOccupation" placeholder="Father's occupation" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="mName">Mother's Name</label>
                        <input type="text" class="form-control" id="mName" name="mName" placeholder="Enter your mother's name" required>
                    </div>
                    <div class="col">
                        <label for="mOccupation">Occupation</label>
                        <input type="text" class="form-control" id="mOccupation" name="mOccupation" placeholder="Mother's occupation" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="income">Total Annual Income of Parents</label>
                    <input type="number" class="form-control" id="income" name="income" placeholder="Annual income in numerals" required>
                </div>
                <hr class="my-4">
                <h4 class="h4">III. Details of Guardian</h4>
                <div class="form-row">
                    <div class="col">
                        <label for="gName">Full Name</label>
                        <input type="text" class="form-control" id="gName" name="gName" placeholder="Enter your guardian's name">
                    </div>
                    <div class="col">
                        <label for="gContact">Contact No.</label>
                        <input type="text" class="form-control" id="gContact" name="gContact" placeholder="Enter guardian's contact no.">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="gAddress">Address</label>
                        <textarea class="form-control" id="gAddress" name="gAddress" rows="1" placeholder="Enter your guardian's address"></textarea>
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">IV. Contact Nos.</h4>
                <div class="form-row">
                    <div class="col">
                        <label for="cContact">Candidate</label>
                        <input type="number" class="form-control" id="cContact" name="cContact" placeholder="Enter your contact no." required>
                    </div>
                    <div class="col">
                        <label for="fContact">Father</label>
                        <input type="number" class="form-control" id="fContact" name="fContact" placeholder="Enter father's contact no." required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="mContact">Mother</label>
                        <input type="number" class="form-control" id="mContact" name="mContact" placeholder="Enter your mother's contact no." required>
                    </div>
                    <div class="col">
                        <label for="landline">Landline</label>
                        <input type="number" class="form-control" id="landline" name="landline" placeholder="Enter your landline no.">
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">V. Eligibility Details</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-2"></th>
                            <th class="col-md-2">Maths</th>
                            <th class="col-md-2">Physics</th>
                            <th class="col-md-2">Chemistry / Equivalent</th>
                            <th class="col-md-2">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>HSC or Equivalent</th>
                            <td><input type="number" id="hscMaths" name="hscMaths" placeholder="Out of 100" required></td>
                            <td><input type="number" id="hscPhysics" name="hscPhysics" placeholder="Out of 100" required></td>
                            <td><input type="number" id="hscChem" name="hscChem" placeholder="Out of 100" required></td>
                            <td><input type="number" id="hscTotal" name="hscTotal" placeholder="Out of 300" required></td>
                        </tr>
                        <tr>
                            <th rowspan="2">MHT-CET 2020</th>
                            <th colspan="2">Interse Merit No. :</th>
                            <td colspan="2"><input type="number" id="cetMerit" name="cetMerit" placeholder="Interse Merit No. (CAP Merit No.)" required></td>
                        </tr>
                        <tr>
                            <td><input type="number" id="cetMaths" name="cetMaths" placeholder="Percentile" required></td>
                            <td><input type="number" id="cetPhysics" name="cetPhysics" placeholder="Percentile" required></td>
                            <td><input type="number" id="cetChem" name="cetChem" placeholder="Percentile" required></td>
                            <td><input type="number" id="cetTotal" name="cetTotal" placeholder="Percentile" required></td>
                        </tr>
                        <tr>
                            <th rowspan="2">JEE 2020</th>
                            <th colspan="2">Interse Merit No. :</th>
                            <td colspan="2"><input type="number" id="jeeMerit" name="jeeMerit" placeholder="Interse Merit No. (JEE Merit No.)" required></td>
                        </tr>
                            <tr>
                            <td><input type="number" id="jeeMaths" name="jeeMaths" placeholder="Percentile" required></td>
                            <td><input type="number" id="jeePhysics" name="jeePhysics" placeholder="Percentile" required></td>
                            <td><input type="number" id="jeeChem" name="jeeChem" placeholder="Percentile" required></td>
                            <td><input type="number" id="jeeTotal" name="jeeTotal" placeholder="Percentile" required></td>
                        </tr>
                    </tbody>
                </table>
                <hr class="my-4">
                <h4 class="h4">VI. Details of Examinations Passed</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-md-2"></th>
                            <th class="col-md-2">Total Marks</th>
                            <th class="col-md-2">Marks Obtained</th>
                            <th class="col-md-2">Year of Passing</th>
                            <th class="col-md-4">Name of Board</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>HSC or equivalent</th>
                            <td><input type="number" id="hscTotal" name="hscTotal" placeholder="_______"></td>
                            <td><input type="number" id="hscObtained" name="hscObtained" placeholder="_______"></td>
                            <td><input type="number" id="hscYear" name="hscYear" placeholder="_______"></td>
                            <td><input type="text" id="hscBoard" name="hscBoard" placeholder="__________"></td>
                        </tr>
                        <tr>
                            <th>SSC or equivalent</th>
                            <td><input type="number" id="sscTotal" name="sscTotal" placeholder="_______" required></td>
                            <td><input type="number" id="sscObtained" name="sscObtained" placeholder="_______" required></td>
                            <td><input type="number" id="sscYear" name="sscYear" placeholder="_______" required></td>
                            <td><input type="text" id="sscBoard" name="sscBoard" placeholder="__________" required></td>
                        </tr>
                        <tr>
                            <th>Diploma</th>
                            <td><input type="number" id="diplomaTotal" name="diplomaTotal" placeholder="_______"></td>
                            <td><input type="number" id="diplomaObtained" name="diplomaObtained" placeholder="_______"></td>
                            <td><input type="number" id="diplomaYear" name="diplomaYear" placeholder="_______"></td>
                            <td><input type="text" id="diplomaBoard" name="diplomaBoard" placeholder="__________"></td>
                        </tr>
                    </tbody>
                </table>

                <hr class="my-4">
                <h4 class="h4">VII. Transaction ID</h4>
                <div class="form-row">
                    <div class="col">
                        <label for="transaction">Transaction ID</label>
                        <input type="text" class="form-control" id="transaction" name="transaction" placeholder="Enter the transaction id" required>
                    </div>
                </div>

                <hr class="my-4">
                <h4 class="h4">VIII. Declaration by the candidate</h4>
                <p>I, <input type="text" placeholder="Your name" required name="decName">, hereby declare that,</p>
                <br>
                <p>i) I have read all the rules of admission and after understanding these rules, I have filled in this application for admission for the current year.</p>
                <p>ii) The information given by me in my application is true to the best of my knowledge and belief.</p>
                <p>iii) I have not been debarred from appearing at any examination held by government constituted or statutory examination authority in India.</p>
                <p>iv) I understand that no other document, other than those attached to the application form will be entertained for the purpose of claims /concessions /weightage, etc. in connection with my admission.</p>
                <p>v) I hereby agree to conform to any rules, acts and laws enforced by Government and I hereby undertake that so long as I am a student of the College, I will do nothing either inside or outside the College which may result in disciplinary action against me under the rules, acts and laws.</p>
                <p>vi) I fully understand that the Management of the College will have liberty to expel/rusticate me from the College for any infringement of the Rules of Conduct, and Discipline prescribed by the College/University and the Undertaking given above.</p>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="cPlace">Place</label>
                        <input type="text" class="form-control" id="cPlace" name="cPlace" placeholder="ex. Mumbai" required>
                    </div>
                    <div class="col">
                        <label for="cDate">Date</label>
                        <input type="date" class="form-control" id="cDate" name="cDate" required>
                    </div>
                    <div class="col">
                        <label for="cSignature">eSignature of Candidate</label>
                        <input type="text" class="form-control" id="cSignature" name="cSignature" placeholder="Enter your full name" required>
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">IX. Declaration to be Signed by the Candidate Belonging to Backward Class</h4>
                <p>I understand that the admission given to me against the quota for reserved category is provisional and will be cancelled if my caste claim is rejected by the appropriate authority.</p>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="bPlace">Place</label>
                        <input type="text" class="form-control" id="bPlace" name="bPlace" placeholder="ex. Mumbai">
                    </div>
                    <div class="col">
                        <label for="bDate">Date</label>
                        <input type="date" class="form-control" id="bDate" name="bDate">
                    </div>
                    <div class="col">
                        <label for="bSignature">eSignature of Candidate</label>
                        <input type="text" class="form-control" id="bSignature" name="bSignature" placeholder="Enter your full name">
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">X. Declaration to be Signed by the Candidate's Father/Guardian</h4>
                <p>I do hereby declare that </p>
                <p>i) The particulars furnished by my son/daughter/ward in this application form are correct to the best of my knowledge.</p>
                <p>ii) I understand and bind myself to pay on behalf of my son/daughter/ward such fees, charges, etc. which the College may levy from time to time by the due date and in the event of failure on my part and/or on the part of my son/daughter/ward, the Principal of the College may take such action against my son/daughter/ward as may deem fit</p>
                <p>iii) I am fully aware that, my ward will not be allowed to appear for the examination if he/she does not attend minimum 75% classes of theory, practicals, drawing etc.  I am also aware that he/she will not be allowed to appear for the examination if he/ she fails to submit satisfactorily all the assignments, jobs, journals, drawings, reports as specified by the University within stipulated time limit.</p>
                <p>iv) I fully understand that if any student is found ragging in the college campus or any victim of ragging complains to the college management/authorities FIR will be lodged against that particular student and he/she shall be liable to be rusticated from the college. This is to be done without fail so that the  Management of the College may not be found directly or indirectly indulging  in the contempt of the Supreme Court decision vide The Supreme Court of India order May 2007 Item No. 33 Court No. 4 Section XIA</p>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="fPlace">Place</label>
                        <input type="text" class="form-control" id="fPlace" name="fPlace" placeholder="ex. Mumbai" required>
                    </div>
                    <div class="col">
                        <label for="fDate">Date</label>
                        <input type="date" class="form-control" id="fDate" name="fDate" required>
                    </div>
                    <div class="col">
                        <label for="fSignature">eSignature of Father/Guardian</label>
                        <input type="text" class="form-control" id="fSignature" name="fSignature" placeholder="Enter your full name" required>
                    </div>
                </div>
                <hr class="my-4">
                <h4 class="h4">Rules and Regulations</h4>
                <p>1. All the students are required to attend the Assembly at 08.30hrs.</p>
                <p>2. All the students are required to attend compulsory the first day of the Semester.</p>
                <p>3. Use of mobile phone any where in the campus is not allowed.</p>
                <p>4. If any student is absent for any LECTURE a note signed by Parents / Guardian is to be brought next day without fail. This however does not help to compensate the minimum requirement of 75% of attendance as prescribed by the University of Mumbai.</p>
                <p>5. So far as the attire and behaviour is concerned students are expected to carry themselves in a dignified manner.</p>
                <br>
                <button type="submit" type="button" name="submit" id="submitBtn" class="btn btn-primary btn-lg">SUBMIT APPLICATION</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>