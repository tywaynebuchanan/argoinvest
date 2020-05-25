<?php  
ob_start();

//Database connection 
include_once('config/dbconn.php');
$filenumber = $_GET['id'];
//Run query to output data for PDF
$query = "SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'";
//$query = "SELECT * FROM tblPersonalInformation WHERE FileNumber = '$filenumber'";
//Mysqli function execute the query 
$result = mysqli_query($conn,$query);
//function to generate pdf 
require_once ("tcpdf/tcpdf.php");
//New PDF document and the parameters
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//No header or footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(true);
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetMargins(15, 10, 20, true);
//Number of pages 
$pdf->AddPage();
//Space between sentences
$pdf->setCellHeightRatio(2);
//Set Font
$pdf->SetFont('Helvetica','UB',15);
//Loop to output data into the document
while($row = mysqli_fetch_assoc($result)){
  $firstname = $row['FirstName'];
  $lastname = $row['LastName'];
  $street = $row['Street'];
  $city = $row['City'];
  $parish = $row['Parish'];
  $startdate = date('F j,Y',strtotime($row["StartDate"]));
  $enddate = date('F jS,Y',strtotime($row["EndDate"]));
  $rate = $row['Rate'];
  $property = $row['Property']; 
  $acreage = $row['Acreage']; 

  $y = abs($row["EndDate"] - $row["StartDate"]);

  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);


 }

$pdf->cell(190,5,'LEASE AGREEMENT',0,1,'C');
$pdf->cell(190,5,'UNDER THE AGRO-INVESTMENT CORPORATION ACT',0,1,'C');
$pdf->cell(190,5,'RHYMESBURY UNDER THE NATIONAL AGRO-PARK PROGRAMME',0,1,'C');
$pdf->cell(190,5,'',0,1,'C');
$pdf->SetFont('Times','',12);
$html = '<p>This AGREEMENT made this <strong>'.date('jS',strtotime($startdate)).'</strong> day of <strong>'.strtoupper(date('F',strtotime($startdate))).'</strong>, <strong>TWO THOUSAND AND TWENTY</strong> between <strong>AGRO-INVESTMENT CORPORATION</strong>, a corporate body duly incorporated under the laws of Jamaica with registered office located at 188 Spanish Town Road, Kingston 11 in the parish of ST ANDREW (hereinafter called the ‘Lessor’) of the ONE PART, and <strong>'.$firstname. ' ' .$lastname.'</strong>, of ' .$street. ',' .$city. ',' .$parish. ' (hereinafter called the ‘`Lessee’) of the OTHER PART. <br/>
<br/>
<strong>WHEREBY IT IS AGREED </strong> as follows: <br/>
1.  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Lessor hereby gives to the Lessee and the Lessee hereby takes part of ALL THAT parcel of land of an informal sub-division situated at '.strtoupper($property).' in the parish of CLARENDON (part of <strong>Volume</strong> 394, <strong>Folio</strong> 63) containing by estimation <strong>16.99 hectares ('.$acreage.' acres)</strong>of the shape and dimensions and butting as shown in the IRRIGATION MAP(s) annexed thereon (hereinafter called the “said plot”) for the term of '.strtoupper($f->format($y)).'('.$y.') years from the FIRST day of '.strtoupper(date('F',strtotime($startdate))).' TWO THOUSAND AND TWENTY (hereinafter referred to as the Term) renewable as hereinafter provided that the annual user fee of '.strtoupper($f->format($rate)).' DOLLARS ($'.$rate.') per acre (hereinafter called the “User Fee”) payable on or before the First day of '.strtoupper(date('F',strtotime($startdate))).' each year, hereinafter the first of such payment or renewal shall be made in accordance with Section 3 (iii) of the FIRST SCHEDULE. 
<br/>
</p>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Helvetica','UB',15);
$pdf->cell(190,5,'FIRST SCHEDULE',0,1,'C');
$pdf->cell(190,5,'CONDITIONS',0,1,'C');
$pdf->SetFont('Times','',12);
$html = '<p>
2. The Lessee hereby agrees with the Lessor as follows:

<ol type = "i">
  <li>To take all reasonable and practicable steps to maintain the crops and irrigation systems on the said plot in an acceptable conditions consistent with good agricultural practices (free from infestation/infection by insects, fungi and other pests) rendering same produce wholesome for consumption;</li>

      <li>To immediately notify the Lessor of any outbreak of any disease/pests of crops on
      the said plot or acts of God which may result in the inability of the Farmer keeping
      his/her obligations under this contract;</li>

     <li> To grant and give to the Lessor and/or its employees, agents contractors and licensees,
      the right of reasonable access to and from the said plot for the purpose of
      communicating, providing technical instructions, collecting and inspecting the produce;</li>
      <li> To keep accurate daily records of production practices, dates and types of chemicals
      used and such other records as may be necessary to ascertain wholesomeness of
      produce;</li>

      <li>To fully co-operate with the Lessor in adopting and/or installing new proven
      management/quality practices designed to enhance quality and productivity of produce;</li>
      <li>To use the said plot only for legitimate and designated agricultural purposes;</li>

      <li>To obtain the prior written approval from the Lessor for any intensified land use
      (e.g. placement of containers, erection of shelter etc.) of the said plot;</li>

      <li>To comply with all and any additional requirements which the Lessor may stipulate
      during the term hereby created relating to the proper use of the said plot;</li>

      <li>Not to assign, transfer, sub-let, license or part with the actual or legal possession or
      the use of the said plot or any part thereof;</li>

      <li>To indemnify and keep the Lessor indemnified against all claims, actions, demands,
      proceedings, liability, damages, costs, charges and expenses of any nature
      whatsoever which the Lessor may suffer or incur in connection with loss of life,
      personal injury and/or damage to property arising from or out of any occurrences
      upon or at the said plot or the use of the said plot or any part thereof by the Lessee
      or by any of the Lessee’s employees, independent contractors, agents or any
      permitted occupier or licensee;</li>

      <li> To establish no less than 75% of the Land allotted within the first year and thereafter
      to manage and maintain at least that 75% for the duration of the lease term. Failure
      to adhere to the terms will result in the lessee being liable for dispossession,
      forfeiture and/or revocation.</li>

      <li>To accept the condition that the agreement is valid contingent on the implementation
      and productivity of the Proposed Project (based on production and implementation
      schedule attached)</li>


      <li>To maintain in an acceptable manner:</li>
      <ol type ="a">
      <li> All verges abutting the allotment.</li>
      <li> Ensuring that all drains abutting allotment are maintained.</li>
      </ol>

      <li>To yield up the said plot at the expiration or early termination of this lease or any
      extension thereof</li>

      <li>To punctually and regularly pay the lease falling due in the manner herein provided
      clear of all deductions whatsoever. If the aforementioned lease payable under this
      Lease is not paid on the due date it will attract a late fee of 10 % per annum on all
      outstanding amounts.</li>

</ol>
      3. Lessor hereby agrees with the Lessee as follows:
<ol type = "i">
      <li>That the Lessee paying the User Fee, observing and performing the several covenants
      on his/her part to be performed and observed, shall quietly and peaceably hold and
      enjoy the plot(s) during the Term hereby created and any extension thereof.</li>

      <li>To maintain accurate records of all activities/transactions.</li>

      <li>Lease rental rates will be revised annually for continuing leases and will be at each
      anniversary, adjusted to be at market rate or a rate befitting the level of investment and
      infrastructure development in the Agro Parks.</li>

      <li>The applicable taxes that are binding on leased property as per the going Government
      determined rates are to be remitted annually by Lessee to Lessor at the agreed dates and
      through prescribed mechanisms.</li>
</ol>
      4. The Lessee and the Lessor agree:
      <br/>
       PROVIDED ALWAYS AND IT IS HEREBY AGREED AND DECLARED as follows:
<ol type ="i">
      <li>If any agronomic activity shall be neglected to be performed within Five (5) days (after
      formal demand has been made for same) or if the Lessee shall omit to perform or observe
      any stipulation herein on his/her part contained after receiving instruction from
      management, the Lessee would have relinquished his/her right to tenure. In such case, the 
      Lessor may re-possess the said plot or any part thereof in the name of the whole and the
      Lease shall thereupon be determined but without prejudice to any claim which the Lessor
      may have against the Lessee in respect of any breach of the land tenure agreement;</li>

      <li>Any notice required by this lease to be given or served upon either party hereto shall be
      deemed to be sufficiently and effectually given or served if addressed to the Lessor and to
      the Lessee at the addresses hereinbefore provided and delivered six days after the date of
      posting;</li>

      <li>The Lessee shall not remove existing irrigation fixtures on the said plot or any subsequently
      installed by the Lessor. Any damage to such fixtures will be repaired/replaced by the
      Lessee.</li>
      </ol>

</p>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Helvetica','UB',15);
$pdf->cell(190,5,'SECOND SCHEDULE',0,1,'C');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 1:</strong></td><td style="width:20%"><strong>PROPERTY:</strong></td><td style="width:60%">All that plot of land part of RHYMESBURY in the
        parish of CLARENDON, containing approximately
        16.99 hectares (42 acres) appearing on the plan
        attached hereto and being part of land comprised in
        Certificate of Title registered at Volume 394 Folio 63
        of the Registered Book of Titles.</td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 2:</strong></td><td style="width:20%"><strong>LESSOR:</strong></td><td style="width:60%">AGRO-INVESTMENT CORPORATION (AgroInvest), Managers of the assets of the
        AGRICULTURAL SUPPORT SERVICES AND
        PRODUCTIVE PROJECTS FUND LTD (ASSPPFL)
        by virtue of Cabinet Decision.</td></tr></table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 3:</strong></td><td style="width:20%"><strong>LESSEE</strong></td><td style="width:60%">'.$firstname.' '.$lastname.'</td></tr></table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 4:</strong></td><td style="width:20%"><strong>THE TERM:</strong></td><td style="width:60%">Five (5) years</td></tr></table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 4a:</strong></td><td style="width:25%"><strong>COMMENCEMENT DATE:</strong></td><td style="width:55%">'.$startdate.'</td></tr></table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 4b:</strong></td><td style="width:20%"><strong>TERMINATION:</strong></td><td style="width:60%">'.$enddate.'</td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 5:</strong></td><td style="width:20%"><strong>THE BASE RATE:</strong></td><td style="width:60%">Shall be J$'.$rate.' per acre per annum in the initial
stage, payable annually in advance. </td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 5a:</strong></td><td style="width:20%"><strong>DATE OF PAYMENT:</strong></td><td style="width:60%">Base Rental is payable annually in advance on or
before '.$startdate.'
st each year for the duration of the lease
term.</td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:15%"><strong>ITEM 5b:</strong></td><td style="width:25%"><strong>RENT REVIEW AND
ADJUSTMENT:</strong></td><td style="width:55%">Shall be subject to an annual adjustment based on a
review of the annual market rental to be conducted by
the Commissioner of Land Valuations. </td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 6:</strong></td><td style="width:20%"><strong>OPTION TO RENEW:</strong></td><td style="width:60%">The lessee shall have the option to renew the lease,
the terms of which shall be agreed by the parties
three (3) months prior to the expiration of the
preceding term. </td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('Times','',12);
$html= '<table><tr><td style="width:20%"><strong>ITEM 7:</strong></td><td style="width:20%"><strong>THE ZONED USED:</strong></td><td style="width:60%">This land is to be used for agricultural purposes only. 
        IN WITNESS WHEREOF the parties have hereunto set their hands the day and year first
        hereinbefore written.</td></tr></table>';

$pdf->writeHTML($html, true, false, true, false, '');

//add a page
$pdf->AddPage();

$pdf->SetFont('Times','',12);
$html ='IN WITNESS WHEREOF the parties have hereunto set their hands the day and year first
        hereinbefore written.<br/>
        EXECUTED under the COMMON SEAL OF
        AGRO-INVESTMENT CORPORATION by
          <br/>
          <br/>

        }____________________________________
        <br/>
         DIRECTOR
         <br/>


        }____________________________________<br/>
        CORPORATE SECRETARY<br/>

        In the presence of<br/>
        ______________________________________<br/>
        <br/>
        JUSTICE OF THE PEACE FOR THE PARISH OF:
        _______________________________________<br/>
        Date

        Lessee} _____________________________<br/>

        In the presence of
        _______________________________________<br/>
        
        JUSTICE OF THE PEACE FOR THE PARISH OF:
        __________________________________________<br/>
        Date';

$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('example_006.pdf');

 ?>