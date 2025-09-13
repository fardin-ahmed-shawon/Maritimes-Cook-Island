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
                Where can I find the Cook Islands legislation governing ship and ship mortgage registration?
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>Cook Islands Ship Registration Act 2007 which provides-</p>
                <ul>
                    <li>For registration with the Cook Islands Ship Registry of registrable interests in a ship;</li>
                    <li>A registerable interest includes ownership of a ship;</li>
                    <li>A registerable interest includes a ship mortgage;</li>
                    <li>A mortgage can be over the ship its equipment and earnings;</li>
                    <li>Registration of a ship mortgage takes effect from the date and time of registration;</li>
                </ul>
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
                Can a ship mortgage be registered if the ship is not registered?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>A ship mortgage cannot be registered if the ship is not registered.</p>
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
                Can a ship mortgage be registered against a ship that is provisionally registered?
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>A ship mortgage can be registered at the same time that a ship is provisionally registered.</p>
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
                Are there any documentary formalities for a ship mortgage?
            </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>A mortgage instrument must be in English;  </p>
                <p>There is no prescribed form for a mortgage instrument however in order for the mortgage to be registered the following information must be contained in the mortgage deed</p>
                <ul>
                    <li>Mortgagee address</li>
                    <li>Mortgagee name</li>
                    <li>Mortgagor name</li>
                    <li>Mortgagor charged</li>
                    <li>Property charged</li>
                    <li>Obligation secured by the mrotgage  <ul>
                        <li>Value of loan / repayment obligations</li>
                    </ul> </li>
                    <li>Date of mortgage</li>
                </ul>
                <p>Signatories to the mortgage who are entitled to sign on behalf of mortgagee / mortgagor.</p>
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
             What documents are required to register a ship mortgage?
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
       <p>An application to register completed by the mortgagee – Form 11; and either</p>
       <ul>
        <li>The mortgage instrument signed by the mortgagor and mortgagee; or</li>
        <li>A notice of mortgage particulars (Form 18) if the mortgage instrument cannot be presented at the time of application for registration;</li>
        <li>If a notice of mortgage particulars is used for registration then the mortgage instrument must be lodged within 14 days of registration;</li>
        <li>Persons signing on behalf of a mortgagee or mortgagor must show proof of authority by power of attorney</li>
       </ul>
       <p>Copies of the Application forms are available in Document section below:</p>
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
           Who can sign a ship mortgage instrument and registration forms?
            </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>The mortgagee and mortgagor;</p>
<ul>
    <li>An authorised officer of mortgagee and mortgagor</li>
    <li>An attorney of the mortgagee and mortgagor</li>
</ul>
<p>Proof of authority must be submitted at the time of registration</p>
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
                How is a mortgage transferred?
            </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
 <p>By memorandum of transfer signed by the mortgagee and the transferee</p>
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
             How is a mortgage discharged?
            </button>
        </h2>
        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
 <p>By memorandum of discharge executed by the mortgagee – Form 17</p>
 <p>A copy of the Application Form is available in the Document Section below.</p>
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
           When are apostilles required?
            </button>
        </h2>
        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
 <p>A bank / mortgagee may require that the Certificate of Mortgage registration be apostilled, this can be arranged by Maritime Cook Islands Head Office. Please contact</p>
<p><a href="">info@maritimecookislands.com</a> or <a href="">moeroa@maritimecookislands.com </a>  for further information.</p>
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
         Can registration of a ship mortgage be completed electronically?
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
         Should a ship mortgage be registered elsewhere in the Cook Islands?
            </button>
        </h2>
        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>Yes – if the ship is owned by an entity incorporated, established or created in the Cook Islands;</p>
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
        Do I need to submit a power of attorney?
            </button>
        </h2>
        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>A power of attorney (PoA) must be submitted wherever the signatory is signing on behalf of the Mortgagee or Mortgagor; the PoA must be notarised, by a recognised notary within your jurisdiction.

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
       What language must the documents submitted to Maritime Cook Islands be in?
            </button>
        </h2>
        <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>All documents submitted to Maritime Cook Islands must be in English; if preferable documents may be submitted in dual language, English and the working language of the mortgagor and mortgagee.

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
       Legal Services: Where can I get legal advice about mortgages?
            </button>
        </h2>
        <div id="flush-collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
<p>The Registry is not authorized to provide legal opinions. Cook Islands legal opinions may be obtained from Cook Islands attorneys who may be located either in Cook Islands or outside of Cook Islands.  A list of attorneys licensed to practice in Cook Islands will be provided upon request.

</p>

            </div>
        </div>
    </div>
</div>