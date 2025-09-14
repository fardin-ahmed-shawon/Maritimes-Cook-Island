<style>
    .bg_color {
        background-color: #f7f7f7;
    }

    /* Default (closed) → show plus */
    .accordion-button::after {
        flex-shrink: 0;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        left: -0;
        top: 16px;
        content: "";
        background-image: url("./img/folder.png");

        transition: all .2s ease-in-out;
    }

    /* Open (not collapsed) → show minus */
    .accordion-button:not(.collapsed)::after {
        content: "";
        background-image: url("./img/open-folder.png");
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

    .legislation-icon {
        width: 30px;
    }
</style>
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header ">
            <button class="accordion-button collapsed "
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne">
                <span class="ps-2"> All files</span>
            </button>
        </h2>
        <div id="flush-collapseOne"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <!-- ✅ Inner Accordion Starts -->
                <!-- Accordion One -->
                <div class="accordion accordion-flush" id="innerAccordionOne">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed "
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo"
                                aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <span class="ps-2">
                                    <p class="text-bg p-2">AML / CFT Regulatory Standards</p>
                                </span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo"
                            class="accordion-collapse collapse"
                            data-bs-parent="#innerAccordionOne">
                            <div class="accordion-body">

                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                    <p class="text-bg p-2">FSC Financial Regulatory Standards in the Cook Islands</p>
                                    <a href="./pdf/FSC-Financial-Regulatory-Standards-in-the-Cook-Islands.pdf">
                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                    <p class="text-bg p-2">FSC Media Release AML CFT ME 2018</p>
                                    <a href="./pdf/FSC-Media-Release-AML-CFT-ME-2018.pdf">
                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                    <p class="text-bg p-2">APG Cook Islands AML CFT Mutual Evaluation Report 2018</p>
                                    <a href="./pdf/APG-Cook-Islands-AML-CFT-Mutual-Evaluation-Report-2018.pdf">
                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ✅ Additional Inner Accordions -->

                <!-- Accordion Two - Codes -->

                <!-- Accordion Two - Codes -->
                <div class="accordion accordion-flush" id="innerAccordionTwo">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseCirculars"
                                aria-expanded="false"
                                aria-controls="flush-collapseCirculars">
                                <span class="ps-2">Circulars</span>
                            </button>
                        </h2>

                        <!-- Parent collapse -->
                        <div id="flush-collapseCirculars"
                            class="accordion-collapse collapse"
                            data-bs-parent="#innerAccordionTwo">
                            <div class="accordion-body">

                                <!-- 🔽 Sub Accordions Start -->
                                <!-- Sub Accordion 1 -->
                                <div class="accordion accordion-flush" id="subAccordion1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseSub1"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseSub1">
                                                <span class="ps-2">Insurance & Liability</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSub1"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#subAccordion1">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 307 – Entry into force of the Hong Kong Convention 2009</p>
                                                    <a href="./pdf/mci-circular-307-entry-into-force-of-the-hong-kong-convention-2009.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>
                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 177 – Administration approval of P&I</p>
                                                    <a href="./pdf/mci-circular-177-administation-approval-of-pandi.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>
                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 31 – EU Directive requiring ship owners of seagoing vessels over 300GT to maintain liability insurance</p>
                                                    <a href="./pdf/mci-circular-31-eu-insurance.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sub Accordion 2 -->
                                <div class="accordion accordion-flush" id="subAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseSub2"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseSub2">
                                                <span class="ps-2">ISM</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSub2"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#subAccordion2">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 207 – Lessons Learnt – Marine Casualty investigation result – Occupational accident – fall of person to a lower deck</p>
                                                    <a href="./pdf/mci-circular-207-lessons-learnt-marine-casualty.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>

                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 242 – Cyber security to be included in Companies’ SMS from 1st January 2021</p>
                                                    <a href="./pdf/mci-circular-242-cyber-security.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>


                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">MCI Circular 146 – ISM Review and NCRs</p>
                                                    <a href="./pdf/mci-circular-146-ism-reviews-and-non-conformity-reports.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>
                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                    <p class="text-bg p-2">ism non conformity report sample 2</p>
                                                    <a href="./pdf/ism-non-conformity-report-sample-2.pdf">
                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sub Accordion 3 -->
                                    <div class="accordion accordion-flush" id="subAccordion3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseSub3"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseSub3">
                                                    <span class="ps-2">Marine Environment</span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseSub3"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#subAccordion3">
                                                <div class="accordion-body">
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 311: GHG Regulatory Outlook for 2025</p>
                                                        <a href="./pdf/mci-circ-311-rto-ghg-regulatory-outlook-for-2025.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 308 – Mediterranean Sea inclusion in ECA</p>
                                                        <a href="./pdf/mci-circular-308-mediterranean-sea-inclusion-in-eca.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 263 – Approval of Ballast Water Management Systems for Cook Islands flagged vessels – Reminder</p>
                                                        <a href="./pdf/mic-circular-263-approval-ballast-water-management .pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 153 – Polar Code comes into force 1st January 2017</p>
                                                        <a href="./pdf/mic-circular-153-polar-code.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">mic-circular-153-polar-code</p>
                                                        <a href="./pdf/mic-circular-263-approval-ballast-water-management .pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 272 – Exemption of Unmanned Non-Self-Propelled (UNSP) barges from survey and certification requirements</p>
                                                        <a href="./pdf/mci-circular-272-2022-exemption-of-unmanned-non-self-propelled-unsp-barges-from-survey-and-certification-requirements.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 270 – International Convention on the Control of Harmful Anti-Fouling Systems on Ships, 2001 – Prohibition of Cybutryne in Anti-Fouling Coating Systems</p>
                                                        <a href="./pdf/mci-circular-270-2022-international-antil-fouling-system-on-ships-prohibition-of-cybutryne.pdf ">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 269 – MARPOL Annex VI – technical and operational measures to reduce carbon intensity of international shipping</p>
                                                        <a href="./pdf/mci-circular-270-2022-international-antil-fouling-system-on-ships-prohibition-of-cybutryne.pdf ">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 269 – MARPOL Annex VI – technical and operational measures to reduce carbon intensity of international shipping</p>
                                                        <a href="./pdf/mci-circular-269-2022-marpol-6-1.pdf ">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 259 – MARPOL Annex IV Regulation 22A – Collection and Reporting of ship fuel consumption data</p>
                                                        <a href="./pdf/mci-circular-259-2022-collection-and-reporting-of-ship-fuel-consumption-data.pdf ">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 258 – MARPOL requirements on fuel oil sampling points – Regulation VI/14 Paragraphs 10-13</p>
                                                        <a href="./pdf/mci-circular-258-marpol-requirements-fuel-oil.pdf ">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 221 – Approval of Ballast Water Management Systems for Cook Islands flagged vessels</p>
                                                        <a href="./pdf/mci-circular-221-2020-ballast-water-management-systems-for-cook-islands-flagged-vessels.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 215 – EU legislation – Inventory of Hazardous</p>
                                                        <a href="./pdf/mci-circular-215-2019-eu-legislation-inventory">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 171 – MARPOL Annex IV – Maximum rate of discharge of untreated sewage in accordance with MEPC.157(55) on board of vessels under Cook Islands Flag Administration</p>
                                                        <a href="./pdf/mci-circular-171-marpol-annex-I-max-discharge-untreated-sewage.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MCI Circular 22 – Prevention of Pollution during transfer of oil cargo between oil tankers at sea – new MARPOL Annex I requirements for STS operations and plans</p>
                                                        <a href="./pdf/mci-circular-22-prevention-pollution-oil-transfer.pdf">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">MARPOL_ANNEX_IV_Sewage_Tool_Discharge_rate_calculation_MEPC 157 55 01 03 2018 9</p>
                                                        <a href="./pdf/MARPOL_ANNEX_IV_Sewage_Tool_Discharge_rate_calculation_MEPC-157-55-01-03-2018-9 (1)">
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 4 -->
                                        <div class="accordion accordion-flush" id="subAccordion4">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub4"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub4">
                                                        <span class="ps-2">Maritime Labour Convention</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub4"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion4">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 313 – MLC Payment Exemption Request</p>
                                                            <a href="./pdf/mci-circ-313–rto–payment-exemption-request.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 240 – MLC Hours of Work and Rest Tool – Updated for 2021</p>
                                                            <a href="./pdf/download (4).html">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MLC Hours of Work And Rest Form 2025</p>
                                                            <a href="./pdf/download (4).html">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 303 – MLC Hours of Work and Rest Tool (updated for 2025)</p>
                                                            <a href="./pdf/MCI-Circular-303_2024_-MLC-tool-2025-working-rest-hours-circular-.docx.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 301 – Amendments of 2022 to the Code of the Maritime Labour Convention, 2006, as amended (MLC, 2006)</p>
                                                            <a href="./pdf/MCI-Circular-301_2024-MLC-Amendments.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 59 – Ships Cooks under MLC 2006</p>
                                                            <a href="./pdf/mci-circular-59-ships-cooks-under-mlc-2006">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 293 – Declaration of Maritime Labour Convention Part I Electronic Certificate</p>
                                                            <a href="./pdf/mci-circular-293-declaration-mlc-part-I-electronic-certificate.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 276 – Maritime Labour Convention Implementation</p>
                                                            <a href="./pdf/mci-circular-276-2023-mlc-implementation.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 261 – Maritime Labour Convention Statement of Compliance</p>
                                                            <a href="./pdf/mci-circular-261-maritime-labour-convention-compliance.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 231 – MLC Implementation</p>
                                                            <a href="./pdf/download(4).html">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 174 – MLC Online Complaints Procedure</p>
                                                            <a href="./pdf/mci-circular-174-mlc-online-complaints-procedure.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">mci-circular-165-mlc-2006-amendments-mci-vessels</p>
                                                            <a href="./pdf/mci-circular-165-mlc-2006-amendments-mci-vessels.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 138 – 2014 MLC Amendments to enter into force on 18th January 2017</p>
                                                            <a href="./pdf/mci-circular-138-2014-mlc-amendments-will-enter-into-force-on-18-january-2017.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 5 -->
                                        <div class="accordion accordion-flush" id="subAccordion5">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub5"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub5">
                                                        <span class="ps-2">MCI Updates</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub5"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion5">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 319 – IMSAS Audit: Potential Impact on Seafarer, Survey and Certification Services</p>
                                                            <a href="./pdf/mci-circ-319-rto-imsas-audit-potential-impact-on-seafarer-survey-certification-services.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 317: SOPEP List of National Operational Contacts dated 31st July 2025</p>
                                                            <a href="./pdf/mci-circ-317-rto-sopep-list-of-national-operational-contacts-dated-31st-july-2025.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 302 – Oil Price Cap Guidance and Attestation Requirements</p>
                                                            <a href="./pdf/MCI-Circular-302-2024-Oil-Cap-Attestation.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 6 -->
                                        <div class="accordion accordion-flush" id="subAccordion6">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub6"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub6">
                                                        <span class="ps-2">Port State Control</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub6"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion6">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 318: Paris & Tokyo Joint Concentrated Inspection Campaign 2025 on Ballast Water Management</p>
                                                            <a href="./pdf/mci-circ-318-rto-paris-tokyo-joint-cic-2025-ballast-water-management.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 184 – Paris & Tokyo MoU Joint Inspection Campaign 2018</p>
                                                            <a href="./pdf/mci-circular-184-paris-tokyo-mou-joint-co-centrated-inspection-campaign-2018 ">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 306 Tokyo Concentrated Flag-State Inspection Campaign</p>
                                                            <a href="./pdf/MCI-Circular-306-Tokyo-Concentrated-Flag-State-Inspection-Campaign-Form.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 296 – Paris and Tokyo Joint Concentrated Inspection Campaign 2024 on crew wages and seafarer employment agreements (MLC, 2006)</p>
                                                            <a href="./pdf/mci-circular-296-paris-tokyo-inspection-campaign-2024-wages-employment-agreements.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 142 – Paris MOU Inspection of Seafarer Certification after 2017</p>
                                                            <a href="./pdf/mci-circular-142-paris-mou-inspection-of-seafarer-certification-after-2017.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 148 – New FSI Regime and PSC assistance program for vessels trading on Paris MOU and Tokyo MOU</p>
                                                            <a href="./pdf/mci-circular-148-new-fsi-regieme-and-psc-assistance-program-for-vessels-trading-in-paris-and-tokyo-mou.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 249 – Cook Islands make the Paris MoU Grey List</p>
                                                            <a href="./pdf/mci-circular-249-cook-islands-paris-mou-grey-list-1.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 193 – Notifying the administration of Accidents, Incidents and PSC Inspections</p>
                                                            <a href="./pdf/mci-circular-193-notifying-administration-accidents.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI MCI Circular 168 – Flag State Inspections</p>
                                                            <a href="./pdf/mci-circular-168-flag-state-inspections">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 161 – EU and UN Sanctions</p>
                                                            <a href="./pdf/mci-circular-161-eu-un-sanctions.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 155 – Management of PSC</p>
                                                            <a href="./pdf/mci-circular-155-management-of-psc.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 144 – Documents available in English</p>
                                                            <a href="./pdf/mci-circular-144-documents-available-in-english.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 62 – Tokyo MoU new inspection regime</p>
                                                            <a href="./pdf/mci-circular-62-tokyo-mou-new-inspection-regime.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 7 -->
                                        <div class="accordion accordion-flush" id="subAccordion7">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub7"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub7">
                                                        <span class="ps-2">Registration</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub7"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion7">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 256 – Increase in Cook Islands Ship Owners Association Membership Fees from 1st January 2022</p>
                                                            <a href="./pdf/mci-circular-256-increase-cisoa-ship-owners-fees.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI MCI Circular 248 – Maritime Cook Islands moves to electronic certificates</p>
                                                            <a href="./pdf/mci-circular-248-maritime-cook-islands-electronic-certificates.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 185 – Amendments to CISOA and CIYS forms and Purpletrac vetting and Sanction compliance</p>
                                                            <a href="./pdf/mci-circular-185-amendments-cisoa-ciys-purpletrac.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 181 – Notification of fraudulent RO Samoa and Nauru</p>
                                                            <a href="./pdf/mci-circular-181-fraudulent-ro-samoa-nauru.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 157 – Conditions of Registration with Maritime Cook Islands</p>
                                                            <a href="./pdf/mci-circular-157-terms-of-trade.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 143 – Fraudulent Micronesian Ships Registry</p>
                                                            <a href="./pdf/mci-circular-143-fraudulent-micronesia-international-ship-registrydoc.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 8 -->
                                        <div class="accordion accordion-flush" id="subAccordion8">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub8"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub8">
                                                        <span class="ps-2">Safe Manning</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub8"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion8">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 309 – Amended Annex 4 – Minimum Safe Manning levels for Commercial yachts ≥ 24m</p>
                                                            <a href="./pdf/mci-circular-309-amended-annex-4-minimum-safe-manning-levels-for-commercial-yachts-≥-24m .pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 9 -->
                                        <div class="accordion accordion-flush" id="subAccordion9">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub9"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub9">
                                                        <span class="ps-2">Safety</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub9"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion9">
                                                    <div class="accordion-body">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseSub8"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseSub8">
                                                                    <span class="ps-2">Safe Manning</span>
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseSub8"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#subAccordion8">
                                                                <div class="accordion-body">
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 289 – Small Yacht Code v5</p>
                                                                        <a href="./pdf/mci-circular-289-small-yacht-code-version-5.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 304 – Statutory certificates for all passenger vessels regardless the Gross Tonnage and for all commercial vessels 500 GT and over.</p>
                                                                        <a href="./pdf/MCI-Circular-304_2024-.docx.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>

                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 298 – Automatic Identification Systems (AIS)</p>
                                                                        <a href="./pdf/MCI-Circular-298-Automatic-Identification-Systems.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>

                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 297 – Ship to Ship Transfers</p>
                                                                        <a href="./pdf/MCI-Circular-297-2024-STS-Transfer.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 294 – 2024 devices for maneuvering</p>
                                                                        <a href="./pdf/mci-circular-294-2024-devices-for-maneuving.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 285 – 2023 IMSBC code amendments</p>
                                                                        <a href="./pdf/mci-circular-285-2023-imsbc-code-amendments.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 281 – 2023 SOLAS requirements towing equipment regulation</p>
                                                                        <a href="./pdf/mci-circular-281-2023-solas-requirements-towing-equipment-regulation.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 264 – Multiple load line assignment Cook Islands</p>
                                                                        <a href="./pdf/mci-circular-264-multiple-load-line-assignment-cook-islands.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 233 – Consequences for deliberately deactivating LRIT and AIS</p>
                                                                        <a href="./pdf/MCI-Circular-233-Consequences-for-deliberately-deactivating-LRIT-and-AIS-revoked-pdf.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 219 – safety notice drager saver cf ee</p>
                                                                        <a href="./pdf/MCI Circular 219 – safety notice drager saver cf ee.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 216 – AIS Regulation Compliance</p>
                                                                        <a href="./pdf/MCI-Circular-216-AIS-Regulation-Compliance-2019-revoked.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 212 – New requirements for authorised service providers regarding lifesaving appliances</p>
                                                                        <a href="./pdf/mci-circular-212-new-requirements-lifesaving-appliances.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 191 – Assembly Resolution A.1116(30) on Escape route signs and equipment location markings</p>
                                                                        <a href="./pdf/mci-circular-191-assembly-resolution-a1116-escape-signs.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 176 – Magnetic Compasses – Deviation Table</p>
                                                                        <a href="./pdf/mci-circular-176-magnetic-compasses-deviation-table.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 172 – Approved Service Providers entitled to operate on behalf of Cook Islands Flag Administration</p>
                                                                        <a href="./pdf/mci-circular-172-approved-service-providers-cook-islands .pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 128 – Icing considerations for cargo ships carrying timber deck cargoes – new formula for calculating ice accretion weight added to Intact Stability Code</p>
                                                                        <a href="./pdf/mci-circular-128-Icing-considerations-cargoships-carrying-timber-deck-cargoes-new-formula-for-calculating-ice-accretion-weight-added-to-Intact-Stability-Code-1.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 66 – IMPORTANT – Comply with the IMSBC Code</p>
                                                                        <a href="./pdf/mci-circular-66-complying-with-the-imsbc-code.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 65 – IMPORTANT – Increasing the chance of survival in abandon ship situations</p>
                                                                        <a href="./pdf/mci-circular-55-revised-imo-guidelines.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 53 – Medicine Chest Medical Equipment and Guides onboard</p>
                                                                        <a href="./pdf/mci-circular-053-medicine-chest-medical-guides-1 .pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 43 – Pilot Transfer arrangements</p>
                                                                        <a href="./pdf/mci-circular-043-pilot-transfer-arrangements .pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 40 – Entrained Air on bunkers</p>
                                                                        <a href="./pdf/mci-circular-40-entrained-air-in-bunkers.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 20 – Fenner Hydrostatic Release Units for liferafts</p>
                                                                        <a href="./pdf/mci-circular-020-fenner-hydrostatic-release.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 13 – REMINDER: 406 EPIRB registration with RCCNZ</p>
                                                                        <a href="./pdf/mci-circular-013-reminder-406-epirb-registration.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 30 – Requirements concerning the use of armed personnel onboard Cook Islands merchant ships</p>
                                                                        <a href="./pdf/mci-circ-30-piracy.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI_SYC_v5</p>
                                                                        <a href="./pdf/MCI_SYC_v5.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 189 – Recommendation on Navigation through the Entrances to the Baltic Sea – Use of Pilotage</p>
                                                                        <a href="./pdf/mci-circular-189-navigation-baltic-sea-pilotage.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 257 – Procedure to apply for an Extension, Exemption/Waiver, or a Dispensation</p>
                                                                        <a href="./pdf/mci-circular-257-procedure-extension-exemption-waiver.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                        <p class="text-bg p-2">MCI Circular 182 – Recommendatory measures on Life saving appliances (LSAs), Fire fighting equipment (FFEs) and detection systems for commercial yachts</p>
                                                                        <a href="./pdf/MCI Circular 76 – AMSA Marine Order 32 (MO32): Cargo handling equipment, Australia.pdf">
                                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 10 -->
                                        <div class="accordion accordion-flush" id="subAccordion10">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub10"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub10">
                                                        <span class="ps-2">Seafarers</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub10"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion10">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI MCI Circular 321 – Implementation of Fit and Proper Person Requirements</p>
                                                            <a href="./pdf/mci-circ-321-stc-implementation-of-fit-and-proper-person-requirements.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 320: Update to MCI Circular 316</p>
                                                            <a href="./pdf/mci-circular-320-stc-update-to-mci-circular-316.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 316: Important Notice – Directorate General of Shipping (DGS), India Circular No. 31 of 2025</p>
                                                            <a href="./pdf/mci-circular-316-important-notice-directorate-general-of-shipping-india-circular-31-of-2025 .pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 314 – Notice of Fraudulent Seafarer Certification – Sint Maarten</p>
                                                            <a href="./pdf/mci-circular-314-notice-of-fraudulent-seafarer-certification-sint-maarten.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 141 – Cancellation of Belize certificates of competencies and Cook Islands endorsements revision of circular 140 2016</p>
                                                            <a href="./pdf/mci-circular-141-cancellation-of-belize-certificates-of-competencies-and-cook-islands-endorsements-revision-of-circular-140-2016.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 140 – Cancellation of Belize Certificates of competencies and Cook Islands endorsements</p>
                                                            <a href="./pdf/mci-circular-140-cancellation-of-belize-certificates-of-competencies-and-cook-islands-endorsements.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 95 reminder to companies of responsiblities under STCW</p>
                                                            <a href="./pdf/mci-circular-95-reminder-to-companies-of-responsiblities-under-stcw.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 82 – Clarifying training</p>
                                                            <a href="./pdf/mci-circular-82-clarifying-training-a.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 58-Guidelines for Development Tables of Seafarers Shipboard Working Arrangements and formats of records of seafarers hours of work or hours of rest</p>
                                                            <a href="./pdf/mci-circular-58.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 56 – Endorsement Application</p>
                                                            <a href="./pdf/mci-circular-056-endorsement-application.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 52 – Alcohol use Masters Officers</p>
                                                            <a href="./pdf/mci-circular-052-alcohol-use-masters-officers.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 51 – Navigational Watch Principles</p>
                                                            <a href="./pdf/mci-circular-051-navigational-watch-principles.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 47 – Medical exam</p>
                                                            <a href="./pdf/mci-circular-47-medical-exa.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 11 – Crew endorsement certificates update</p>
                                                            <a href="./pdf/mci-circular-011-crew-endorsement-certificates-update.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 11 -->
                                        <div class="accordion accordion-flush" id="subAccordion11">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub11"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub11">
                                                        <span class="ps-2">Security</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub11"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion11">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 38 – SSAS notification</p>
                                                            <a href="./pdf/mci-circular-38-ssas-notification.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 262 – SOLAS Security Level increases – ISPS Code for Cook Islands moored or at anchorage or scheduled or operating in the Ukraine EEZ/Black Sea / Azov Sea</p>
                                                            <a href="./pdf/mci-circular-262-solas-security-level-increases.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 282 – Additional Security Measures consequent to the security situation and the risk of collateral damage in the waters outside of Israel and the Gaza Strip</p>
                                                            <a href="./pdf/mci-circular-282-security-warning-israel-and-gaza.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 12 -->
                                        <div class="accordion accordion-flush" id="subAccordion12">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSub12"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSub12">
                                                        <span class="ps-2">Technical</span>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSub12"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordion12">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 225 – Electronic Record Books</p>
                                                            <a href="./pdf/mci-circular-225-electronic-record-books.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 297 – Ship to Ship Transfers</p>
                                                            <a href="./pdf/MCI-Circular-297-2024-STS-Transfer.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 60 – International Medical Guide for ships 3rd edition</p>
                                                            <a href="./pdf/mci-circular-60-international-medical-guide-for-ships-3rd-edition.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 264 – Multiple load line assignment Cook Islands</p>
                                                            <a href="./pdf/mci-circular-264-multiple-load-line-assignment-cook-islands.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 233 – Consequences for deliberately deactivating LRIT and AIS</p>
                                                            <a href="./pdf/MCI-Circular-233-Consequences-for-deliberately-deactivating-LRIT-and-AIS-revoked-pdf.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 219 – safety notice drager saver cf ee</p>
                                                            <a href="./pdf/mci-circular-219-safety-notice-drager-saver-cf-ee.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 216 – AIS Regulation Compliance</p>
                                                            <a href="./pdf/MCI-Circular-216-AIS-Regulation-Compliance-2019-revoked.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 212 – New requirements for authorised service providers regarding lifesaving appliances</p>
                                                            <a href="./pdf/mci-circular-212-new-requirements-lifesaving-appliances.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 191 – Assembly Resolution A.1116(30) on Escape route signs and equipment location markings</p>
                                                            <a href="./pdf/mci-circular-191-assembly-resolution-a1116-escape-signs.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 176 – Magnetic Compasses – Deviation Table</p>
                                                            <a href="./pdf/mci-circular-176-magnetic-compasses-deviation-table.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 128 – Icing considerations for cargo ships carrying timber deck cargoes – new formula for calculating ice accretion weight added to Intact Stability Code</p>
                                                            <a href="./pdf/mci-circular-128-Icing-considerations-cargoships-carrying-timber-deck-cargoes-new-formula-for-calculating-ice-accretion-weight-added-to-Intact-Stability-Code-1.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 66 – IMPORTANT – Comply with the IMSBC Code</p>
                                                            <a href="./pdf/mci-circular-66-complying-with-the-imsbc-code.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 65 – IMPORTANT – Increasing the chance of survival in abandon ship situations</p>
                                                            <a href="./pdf/mci-circular-65-increasing-the-chance-of-survival-in-abandon-ship-situations.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 55 – Revised IMO guidelines for maintenance and inspection of fire protection systems and appliances</p>
                                                            <a href="./pdf/mci-circular-55-revised-imo-guidelines.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 53 – Medicine Chest Medical Equipment and Guides onboard</p>
                                                            <a href="./pdf/mci-circular-053-medicine-chest-medical-guides-1.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 40 – Entrained Air on bunkers</p>
                                                                <a href="./pdf/mci-circular-40-entrained-air-in-bunkers.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 20 – Fenner Hydrostatic Release Units for liferafts</p>
                                                                <a href="./pdf/mci-circular-020-fenner-hydrostatic-release.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 18 – Lifeboats – Fixed structural connections of release mechanisms</p>
                                                                <a href="./pdf/mci-circular-018-lifeboats-structural-connections.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 13 – REMINDER: 406 EPIRB registration with RCCNZ</p>
                                                                <a href="./pdf/mci-circular-013-reminder-406-epirb-registration.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 189 – Recommendation on Navigation through the Entrances to the Baltic Sea – Use of Pilotage</p>
                                                                <a href="./pdf/mci-circular-189-navigation-baltic-sea-pilotage.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 257 – Procedure to apply for an Extension, Exemption/Waiver, or a Dispensation</p>
                                                                <a href="./pdf/mci-circular-189-navigation-baltic-sea-pilotage.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 257 – Procedure to apply for an Extension, Exemption/Waiver, or a Dispensation</p>
                                                                <a href="./pdf/mci-circular-257-procedure-extension-exemption-waiver.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 182 – Recommendatory measures on Life saving appliances (LSAs), Fire fighting equipment (FFEs) and detection systems for commercial yachts</p>
                                                                <a href="./pdf/mci-circular-182-recommendatory-measures-lsas-ffes.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">MCI Circular 76 – AMSA Marine Order 32 (MO32): Cargo handling equipment, Australia</p>
                                                                <a href="./pdf/mci-circular-76-cargo-handling-equipment-australia.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 🔼 Sub Accordions End -->

                                        </div>
                                    </div>
                                </div>


                            </div>




                        </div>


                        <!-- Accordion Three - Conventions -->
                        <div class="accordion accordion-flush" id="innerAccordionThree">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseConventions"
                                        aria-expanded="false"
                                        aria-controls="flush-collapseConventions">
                                        <span class="ps-2">Forms</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseConventions"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#innerAccordionThree">
                                    <div class="accordion-body">

                                        <!-- Sub Accordion 1 -->
                                        <div class="accordion accordion-flush" id="subAccordionOne">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubOne"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubOne">
                                                        CISOA
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubOne"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionOne">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">CISOA Form 8A Company – 08A E F CISOA CO v7.docx</p>
                                                            <a href="./pdf/08A-E-F-CISOA-CO-v7.docx">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">CISOA Form 8B Individual – 08B E F CISOA IND v7.docx</p>
                                                            <a href="./pdf/CISOA Form 8B Individual – 08B E F CISOA IND v7.docx">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 2 -->
                                        <div class="accordion accordion-flush" id="subAccordionTwo">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubTwo"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubTwo">
                                                        CIYS
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubTwo"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionTwo">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">CIYS Form 7A Company – 07A E F CIYS CO v5.docx</p>
                                                            <a href="./pdf/07A-E-F-CIYS-CO-v5.docx">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">CIYS Form 7B Individual – 07B E F CIYS IND v5</p>
                                                            <a href="./pdf/07B-E-F-CIYS-IND-v5.docx">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 3 -->
                                        <div class="accordion accordion-flush" id="subAccordionThree">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubThree"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubThree">
                                                        Fishing Vessel
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubThree"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionThree">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">Form 3 Registration Enquiry Form Fishing Vessel v3</p>
                                                            <a href="./pdf/Form-3-Registration-Enquiry-Form-Fishing-Vessel-v3.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 4 -->
                                        <div class="accordion accordion-flush" id="subAccordionFour">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubFour"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubFour">
                                                        Maritime Labour Convention
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubFour"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionFour">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Circular 313 – MLC Payment Exemption Request</p>
                                                            <a href="./pdf/Form-3-Registration-Enquiry-Form-Fishing-Vessel-v3.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 5 -->
                                        <div class="accordion accordion-flush" id="subAccordionFive">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubFive"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubFive">
                                                        Merchant Ships
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubFive"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionFive">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">MCI Ship to Ship Transfer Advanced Notification Form</p>
                                                            <a href="./pdf/MCI_Ship_to_Ship_Transfer_Advanced_Notification_Form.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 6 -->
                                        <div class="accordion accordion-flush" id="subAccordionSix">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubSix"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubSix">
                                                        Mortgage
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubSix"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionSix">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">Form 11 Application to Register a Mortgage v2 </p>
                                                            <a href="./pdf/Form-11-Application-to-Register-a-Mortgage-v2.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">Form-17-Memo-of-Discharge-of-Mortgage-v2</p>
                                                            <a href="./pdf/Form-17-Memo-of-Discharge-of-Mortgage-v2.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">Form 18 Notice Mortgage Particulars v2</p>
                                                            <a href="./pdf/Form-18-Notice-Mortgage-Particulars-v2.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 7 -->
                                        <div class="accordion accordion-flush" id="subAccordionSeven">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubSeven"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubSeven">
                                                        Registration
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubSeven"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionSeven">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                Form 1A F APP DEC v32</p>
                                                            <a href="./pdf/Form-1A-F-APP-DEC-v32.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sub Accordion 8 -->
                                        <div class="accordion accordion-flush" id="subAccordionEight">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubEight"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubEight">
                                                        Safe Manning
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubEight"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionEight">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                Form 6 Minimum Safe Manning Application v11 1</p>
                                                            <a href="./pdf/Form-6-Minimum-Safe-Manning-Application-v11.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sub Accordion 9 -->
                                        <div class="accordion accordion-flush" id="subAccordionNine">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseSubNine"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseSubNine">
                                                        Safe Manning
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseSubEight"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#subAccordionNine">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                MCI Fit and Proper Person Form</p>
                                                            <a href="./pdf/MCI-Fit-and-Proper-Person-Form.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                Form 56 – STCW Dispensation Request Form</p>
                                                            <a href="./pdf/56-F-STCW-DISPv1.pdf.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                Form 31 Medical Examination Certificate v3</p>
                                                            <a href="./pdf/Form-31-Medical-Examination-Certificate-v3.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">

                                                                Form 60 Application for a Seamans Discharge Book</p>
                                                            <a href="./pdf/60-F-STCW-SB-v2.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- /accordion-body -->
                                </div>
                            </div>



                            <!-- Outer Accordion -->
                            <div class="accordion accordion-flush" id="innerAccordionFour">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseCodes"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseCodes">
                                            <span class="ps-2">Maritime Legislation</span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseCodes"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#innerAccordionFour">
                                        <div class="accordion-body">

                                            <!-- ✅ Inner Accordion 1 -->
                                            <div class="accordion accordion-flush" id="innerSubAccordionOne">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseInnerOne"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapseInnerOne">
                                                            Codes
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseInnerOne"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#innerSubAccordionOne">
                                                        <div class="accordion-body">
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">
                                                                    Cook Islands Small Yacht Code Ver5</p>
                                                                <a href="./pdf/cook-islands-small-yacht-code-ver5.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">
                                                                    Cook Islands Large Yacht Code Ver4</p>
                                                                <a href="./pdf/Cook-Islands-Large-Yacht-Code-Ver4.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- ✅ Inner Accordion 2 -->
                                            <div class="accordion accordion-flush" id="innerSubAccordionTwo">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseInnerTwo"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapseInnerTwo">
                                                            Regulations
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseInnerTwo"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#innerSubAccordionTwo">
                                                        <div class="accordion-body">
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">

                                                                    Maritime Rules Offences Regulations 2014</p>
                                                                <a href="./pdf/Maritime-Rules-Offences-Regulations-2014.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">

                                                                    Shipping Infringement Deficiency Regulations 2014</p>
                                                                <a href="./pdf/Shipping-Infringement-Deficiency-Regulations-2014.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">

                                                                    Financial Transactions Reporting Maritime Cook Islands Regulations 2017</p>
                                                                <a href="./pdf/Financial-Transactions-Reporting-Maritime-Cook-Islands-Regulations-2017.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                <p class="text-bg p-2">

                                                                    Maritime Transport Small Motorised Vessels Regulations 2014</p>
                                                                <a href="./pdf/Maritime-Transport-Small-Motorised-Vessels-Regulations-2014.pdf">
                                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ✅ Inner Accordion 3 -->
                                        <div class="accordion accordion-flush" id="innerSubAccordionThree">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseInnerThree"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseInnerThree">
                                                        Regulations
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseInnerThree"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#innerSubAccordionThree">
                                                    <div class="accordion-body">
                                                        <!-- CKI Maritime STCW Rules 2020 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">


                                                                CKI Maritime STCW Rules 2020</p>
                                                            <a href="./pdf/CKI-Maritime-STCW-Rules-2020.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime tonnage rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime tonnage rules 2014</p>
                                                            <a href="./pdf/Maritime-tonnage-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime sail training rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime sail training rules 2014</p>
                                                            <a href="./pdf/Maritime-sail-training-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime anti fouling rules 2014no1 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime anti fouling rules 2014no1</p>
                                                            <a href="./pdf/Maritime-anti-fouling-rules-2014no1.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime fund prot 1992 rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime fund prot 1992 rules 2014</p>
                                                            <a href="./pdf/Maritime-fund-prot-1992-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime clc prot 1992 rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime clc prot 1992 rules 2014</p>
                                                            <a href="./pdf/Maritime-clc-prot-1992-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Gazette rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Gazette rules 2014</p>
                                                            <a href="./pdf/Gazette-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime load line rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime load line rules 2014</p>
                                                            <a href="./pdf/Maritime-load-line-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime dcs rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime dcs rules 2014</p>
                                                            <a href="./pdf/Maritime-dcs-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime solas rules 2014</p>
                                                            <a href="./pdf/Maritime-solas-rules-2014">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime solas rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime solas rules 2014</p>
                                                            <a href="./pdf/Maritime-solas-rules-2014">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime bunkers rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime bunkers rules 2014</p>
                                                            <a href="./pdf/Maritime-bunkers-rules-2014.pdf"></a>
                                                            <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                        </div>
                                                        <!-- Maritime mlc rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime mlc rules 2014</p>
                                                            <a href="./pdf/Maritime-mlc-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime large yacht rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime large yacht rules 2014</p>
                                                            <a href="./pdf/Maritime-large-yacht-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime mci qmsm rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime mci qmsm rules 2014</p>
                                                            <a href="./pdf/Maritime-mci-qmsm-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime revocation rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime revocation rules 2014</p>
                                                            <a href="./pdf/Maritime-revocation-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime casualty investigation rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime casualty investigation rules 2014</p>
                                                            <a href="./pdf/Maritime-casualty-investigation-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime wreck removal rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime wreck removal rules 2014</p>
                                                            <a href="./pdf/Maritime-wreck-removal-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime ballast water rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime ballast water rules 2014</p>
                                                            <a href="./pdf/Maritime-ballast-water-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime marpol rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime marpol rules 2014</p>
                                                            <a href="./pdf/Maritime-marpol-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime colregs rules 2014 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime colregs rules 2014</p>
                                                            <a href="./pdf/Maritime-colregs-rules-2014.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                        <!-- Maritime STCW IGF and Polar Code Amendment Rules 2021 -->
                                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                            <p class="text-bg p-2">
                                                                Maritime STCW IGF and Polar Code Amendment Rules 2021</p>
                                                            <a href="./pdf/Maritime-STCW-IGF-and-Polar-Code-Amendment-Rules-2021.pdf">
                                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- /accordion-body -->
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Five - News & PR -->
                        <div class="accordion accordion-flush" id="innerAccordionFive">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseNews"
                                        aria-expanded="false"
                                        aria-controls="flush-collapseNews">
                                        <span class="ps-2">News & PR</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseNews"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#innerAccordionFive">
                                    <div class="accordion-body">
                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                            <p class="text-bg p-2">
                                                PRESS RELEASE Paul Jackson and Teina Mackenzie join Maritime Cook Islands Asia Pacific Yachts Technical Team</p>
                                            <a href="./pdf/PRESS-RELEASE_-Paul-Jackson-Teina-Mackenzie-join-Maritime-Cook-Islands-Asia-Pacific-Yachts-Technical-Team.docx-4.pdf">
                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                            </a>
                                        </div>
                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                            <p class="text-bg p-2">
                                                PRESS RELEASE TIARE ALICE STORY</p>
                                            <a href="./pdf/PRESS-RELEASE-TIARE-ALICE-STORY.pdf">
                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                            </a>
                                        </div>
                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                            <p class="text-bg p-2">
                                                PRESS RELEASE MCI APPOINTS NEW MANAGMENT BOARD</p>
                                            <a href="./pdf/PRESS-RELEASE-MCI-APPOINTS-NEW-MANAGMENT-BOARD-1 .pdf">
                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Six - Other -->
                        <div class="accordion accordion-flush" id="innerAccordionSix">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOther"
                                        aria-expanded="false"
                                        aria-controls="flush-collapseOther">
                                        <span class="ps-2">Other</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOther"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#innerAccordionSix">
                                    <div class="accordion-body">
                                        <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                            <p class="text-bg p-2">
                                                MCI Fit and Proper Person Guidelines</p>
                                            <a href="./pdf/MCI-Fit-and-Proper-Person-Guidelines.pdf">
                                                <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                            </a>
                                        </div>
                                        <div class="accordion-body">
                                            <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                <p class="text-bg p-2">
                                                    Legal Opinion from Norton Rose Fulbright – Cook Islands Ships Registry</p>
                                                <a href="./pdf/Legal-Opinion-from-Norton-Rose-Fulbright-Cook-Islands-Ships-Registry.pdf">
                                                    <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>