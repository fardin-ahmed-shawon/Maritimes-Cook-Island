<style>
    /* accordion */
    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #797672;
        text-align: left;
        background-color: #F7F7F7;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    }

    /* Default (closed) → show plus */
    .accordion-button::after {
        flex-shrink: 0;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        left: -5px;
        top: 9px;
        content: "+";
        font-size: 25px;
        text-align: center;
        background-image: none !important;
        transition: all .2s ease-in-out;
    }

    /* Open (not collapsed) → show minus */
    .accordion-button:not(.collapsed)::after {
        content: "–";
        /* en dash or use "-" */
        font-size: 25px;
        transform: rotate(0deg);
    }

    .accordion-button:not(.collapsed) {
        color: #797672;
        background-color: #F7F7F7;
        box-shadow: rgba(0, 0, 0, 0.125) 0px -1px 0px inset;
    }

    .accordion-body {
        background-color: #F7F7F7 !important;
    }
</style>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <!-- Item 1 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne">
              Is the Cook Islands on the STCW White List?
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
               <p>Yes, the Cook Islands are party to the International Convention on Standards of Training, Certification and Watchkeeping for Seafarers (STCW) 1978, as amended.</p>

                <p>A copy of the act is available in the Document section below.</p>
            </div>
        </div>
    </div>

    <!-- Item 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo">
               How are certificates issued by Maritime Cook Islands?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>As of May 2021, Maritime Cook Islands has transitioned to electronic certificates in accordance with International Maritime Organization (IMO) guidelines outlined in FAL.5/Circ.39/Rev.2. Please refer to Maritime Cook Islands Circular 248/2021 for further details.</p>
            </div>
        </div>
    </div>

    <!-- Item 3 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree">
               <p>How to verify the authenticity of seafarer certificates issued by the Cook islands?</p>

            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>As of May 2021, Maritime Cook Islands has transitioned to electronic certificates in accordance with International Maritime Organization (IMO) guidelines outlined in FAL.5/Circ.39/Rev.2. Please refer to Maritime Cook Islands Circular 248/2021 for further details.</p>
            </div>
        </div>
    </div>

    <!-- Item 4 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour">
How to verify the authenticity of seafarer certificates issued by the Cook islands?
            </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>There are three methods to verify the authenticity of Cook Islands certificates: 1) Our newly issued electronic Cook Islands certificates include QR Codes which allow for quick verification of the certificates issued. Verification can be completed by scanning the QR Code presented on the certificate. 2) Use the <a href="seafarer-certificate-verification.php">online verification</a> form on the Maritime Cook Islands website. 3) Send a verification request via email to <a>seafarers@maritimecookislands.com</a>.</p>
            </div>
        </div>
    </div>

    <!-- Item 5 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive">
          Who is required to apply and hold Cook Islands endorsement certificates?
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
       <p>Deck and engineer officers, as well as radio operators as defined in Regulation I/1 of the STCW Convention, must possess STCW or equivalent documentation. Officers specified on the Minimum Safe Manning Certificate (MSMC) for Cook Islands flagged vessels are required to obtain Cook Islands Endorsement Certificates prior to embarkation.</p>

            </div>
        </div>
    </div>

    <!-- Item 6 -->

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix"
                aria-expanded="false"
                aria-controls="flush-collapseSix">
Which certificates are accepted for service aboard Cook Islands flagged vessels?
            </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Maritime Cook Islands accepts all Certificates of Competency (CoC), Certificate of Proficiency (CoP) and Non-STCW Qualifications issued by states listed on the IMO STCW White List, with an exception of the Democratic People’s Republic of Korea.</p>
            </div>
        </div>
    </div>
    <!-- Item 7  -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSeven"
                aria-expanded="false"
                aria-controls="flush-collapseSix">
             Are there any nationality restrictions for seafarers serving on Cook Islands flagged vessels?
            </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
 <p>There are no nationality restrictions for seafarers employed on Cook Islands flagged vessels</p>
            </div>
        </div>
    </div>
<!--Item 8 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseEight"
                aria-expanded="false"
                aria-controls="flush-collapseEight">
      How do I apply for a Cook Islands endorsement?
            </button>
        </h2>
        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Applications for Cook Islands endorsements can be submitted via the online endorsement application forms available <a href="certificate-of-endorsement.php">here</a>.</p>
            </div>
        </div>
    </div>
<!--Item 9 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseNine"
                aria-expanded="false"
                aria-controls="flush-collapseNine">
        What is the timeframe for receiving a Letter of Acknowledgement (LOA) after submitting my endorsement application?
            </button>
        </h2>
        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Upon successful review of the application and supporting documents, a Letter of Acknowledgement (LOA) will be issued electronically to the email address provided on the endorsement application form within 24 hours. All applications are vetted by our Maritime Cook Islands Seafarer Training & Certification Department. The MSMC must be issued to the vessel to proceed with the endorsement process.</p>
            </div>
        </div>
    </div>
<!--Item 10 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTen"
                aria-expanded="false"
                aria-controls="flush-collapseTen">
Following the successful internal verification and settlement of the application invoice, the Cook Islands Certificate of Endorsement will be electronically issued within the 3-month validity period of the LOA.
            </button>
        </h2>
        <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Yes</p>
            </div>
        </div>
    </div>
<!--Item 11 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseEleven"
                aria-expanded="false"
                aria-controls="flush-collapseEleven">
       If I serve aboard a tanker vessel, do I need to apply for endorsement of my tanker certificate?
            </button>
        </h2>
        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Yes, all seafarers serving on tanker vessels must hold the appropriate Certificate of Proficiency as per Regulation V/1 of the STCW Convention. All Officers shall in addition, have the above mentioned Certificate of Proficiency endorsed by the flag.</p>
<ul>
    <li>Registration fees are applicable;
Failure to register a ship mortgage against the entity can have detrimental legal consequences;</li>
<li>You should consult a <a href="cook-islands-lawyers.php">Cook Island lawyer</a></li>
</ul>
            </div>
        </div>
    </div>
<!--Item 12 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwelve"
                aria-expanded="false"
                aria-controls="flush-collapseTwelve">
       Do I have to reapply for a new endorsement application if I have renewed my underlying Certificate of Competency?
            </button>
        </h2>
        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Yes, a new endorsement application must be submitted if your Certificate of Competency has been revalidated or reissued.

</p>

            </div>
        </div>
    </div>
<!--Item 13 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThirteen"
                aria-expanded="false"
                aria-controls="flush-collapseThirteen">
Is it necessary to submit STCW basic safety training certificates (VI/1) along with advanced courses for endorsement applications?
            </button>
        </h2>
        <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Yes, all seafarers applying for Cook Islands endorsements must provide proof of STCW basic safety training certificates (VI/1) along with the necessary STCW advanced courses.

</p>

            </div>
        </div>
    </div>
<!--Item 14 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFourteen"
                aria-expanded="false"
                aria-controls="flush-collapseFourteen">
What is the payment procedure for a Cook Islands endorsement application?
            </button>
        </h2>
        <div id="flush-collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Following the issuance of the LOA, invoices for endorsement applications will be issued against the vessel at the end of each month and must be settled prior to the issuance of the full-term endorsement certificate. Payment can be made via bank telegraphic transfers.

</p>

            </div>
        </div>
    </div>
<!--Item 15 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFifteen"
                aria-expanded="false"
                aria-controls="flush-collapseFifteen">
Is it necessary for ship security training certificates of officers serving on Cook Islands ships to be endorsed?
            </button>
        </h2>
        <div id="flush-collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>While it is required for all seafarers to hold a Ship Security Training certificate, endorsement of the Ship Security Officer Certificates of Proficiency is not mandatory but can be requested.

</p>

            </div>
        </div>
    </div>
<!--Item 16 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSixteen"
                aria-expanded="false"
                aria-controls="flush-collapseSixteen">
What is the process for applying for a Cook Islands Certificate of Competency / Certificate of Proficiency?
            </button>
        </h2>
        <div id="flush-collapseSixeen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Cook Islands Certificates of Competency or Certificates of Proficiency are issued to seafarers who meet the necessary requirements and have completed training at an approved Cook Islands Maritime Training Institution (MTI).

All course requirements and requests for further information must be directed to the necessary approved Cook Islands MTI.

</p>

            </div>
        </div>
    </div>
<!--Item 17 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSeventeen"
                aria-expanded="false"
                aria-controls="flush-collapseSeventeen">
Which maritime training institutions (MTI) are approved by the Cook Islands?
            </button>
        </h2>
        <div id="flush-collapseSeveneen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<ul>
    <li>International Maritime Science Academy (IMS), Egypt</li>
    <li>Maritime Activities Consultants (MAC), Greece & India</li>
    <li>Poseidon Maritime Academy (PMA), Turkey</li>
    <li>Seafarers Training Center Inc. (STC), Panama</li><li>SSM United – Ship Management Ltd, Croatia
YAK Group, India</li>
</ul>
<p>Further contact details for each MTI can be found <a href="approved-training-centres.php">here</a>.</p>



            </div>
        </div>
    </div>
<!--Item 18 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseEighteen"
                aria-expanded="false"
                aria-controls="flush-collapseEighteen">
<p>Is it mandatory for seafarers serving aboard a Cook Islands flagged vessel to hold a Seamans Discharge Book?</p>

            </button>
        </h2>
        <div id="flush-collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>
Yes, all seafarers intending to serve on Cook Islands flagged vessels must hold a Seamans Discharge Book. The Cook Islands accepts Seamans Discharge Books issued by foreign flags and does not require them to be issued in accordance with the International Labour Organization (ILO) Convention No.185.</p>




            </div>
        </div>
    </div>
<!--Item 19 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseNineteen"
                aria-expanded="false"
                aria-controls="flush-collapseNineteen">
<p>How can I obtain a Cook Islands Seamans Discharge Book?</p>

            </button>
        </h2>
        <div id="flush-collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>
Applications must be submitted electronically via email to seafarers@maritimecookislands.com, including the following:</p>
<ul>
    <li>Seamans Discharge Book application form (Form 60, available  <a href="seafarer-discharge-book.php">here</a>)</li>
    <li>Valid passport copy</li>
    <li>Passport-sized photo</li>
    <li>Courier address for delivery</li>
</ul>




            </div>
        </div>
    </div>
<!--Item 20 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwenty"
                aria-expanded="false"
                aria-controls="flush-collapseTwenty">
<p>How long is a Cook Islands Seamans Discharge Book valid for?</p>

            </button>
        </h2>
        <div id="flush-collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>A Cook Islands Seamans Discharge Book is valid for 5 years from the date of issuance.</p>




            </div>
        </div>
    </div>
<!--Item 21 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentyOne"
                aria-expanded="false"
                aria-controls="flush-collapseTwentyOne">
<p>How can I pay for my Cook Islands Seamans Discharge Book application?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentyOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Upon receiving all supporting documents and approval, an invoice will be issued for the application fee, which includes the cost of the book and courier fees. Payment can be made via bank telegraphic transfers..</p>




            </div>
        </div>
    </div>
<!--Item 22 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentyTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwentyTwo">
<p>Under what circumstances can a dispensation be issued?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Dispensations can be issued in exceptional circumstances provided that they do not endanger persons, property, or the environment. Examples include genuine cases of force majeure, such as death or incapacitation of a master or chief engineer. Logistical challenges in crewing a vessel with fully-qualified personnel do not qualify for dispensation.</p>




            </div>
        </div>
    </div>
<!--Item 23-->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentyThree"
                aria-expanded="false"
                aria-controls="flush-collapseTwentyThree">
<p>What is the maximum period for which a dispensation can be issued?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentyThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>A dispensation can be issued for a specified period not exceeding six months.</p>




            </div>
        </div>
    </div>
<!--Item 24-->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentyFour"
                aria-expanded="false"
                aria-controls="flush-collapseTwentyFour">
<p>How do I apply for an STCW Dispensation?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentyFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>To apply for an STCW Dispensation, you must complete the application form and send it via email to the Seafarer Training & Certification Department at <a>seafarers@maritimecookislands.com.</a></p>

<p>  The application should include a detailed explanation of the circumstances necessitating the dispensation and the steps being taken to crew the ship with qualified personnel.</p>




            </div>
        </div>
    </div>
<!--Item 25-->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentyFive"
                aria-expanded="false"
                aria-controls="flush-collapseTwentyFive">
<p>Who is required to hold a valid Medical Fitness Certificate for service on a Cook Islands flagged vessel?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentyFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>All seafarers serving or intending to serve on Cook Islands flagged vessels must hold a valid medical fitness certificate issued by an approved medical practitioner. The certificate must certify the seafarer is fit for sea service as per the STCW Convention 1978, as amended, and the Maritime Labour Convention.</a></p>

            </div>
        </div>
    </div>
<!--Item 26-->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwentySix"
                aria-expanded="false"
                aria-controls="flush-collapseTwentySix">
<p>Which Medical Fitness Certificates are accepted by the Cook Islands?</p>

            </button>
        </h2>
        <div id="flush-collapseTwentySix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>The Cook Islands accept Medical Certificates issued by approved medical practitioners, approved to conduct medical examinations and issue Medical Certificates, by the state of which they operate. These states must be a party to the STCW White List.</p>

            </div>
        </div>
    </div>
</div>