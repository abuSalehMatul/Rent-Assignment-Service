<?php
require_once APPROOT . '/views/inc/indexPage/head.php';
?>
<body>
<div class="wrapper">
    <?php
    require_once APPROOT . '/views/inc/header.php';

    ?>
    <p></p>
    <div class="p-1 main">
        <section class="s-1 pt-header">
            <picture>
                <img src="<?php echo URLROOT.'\public\shared\images\about.png' ?>"
                     alt="Assignment Writing Resources" class="bg__image--top lazy" style="opacity: 0.4!important"></picture>
            <div class="l-0">
                <div class="s-1__wrapper">
                    <div class="s-1__left"><h1 class="h--lg h--is-inverse" >Top Assignment Writing Service with
                            Professional Assignment Writers</h1>
                        <p class="p--lg p--is-inverse" >Increase your chance of success with our Assignment Writing
                            Service</p>

                    </div>
                    <div class="s-1__right">
                        <div class="c-1 js-calculator" data-component-name="c-1__as__calculator-primary">
                            <div class="js-calculator__form">
                                <form action="https://app.Assignment.IO.com/auth/register" method="get">
                                    <div class="c-1__header">
                                        <div class="h--sm">Calculate the price</div>
                                    </div>
                                    <div class="c-1__main">
                                        <div class="c-1__row" id="servicesDropdownWrap">
                                            <div class="c-3 dropdown">
                                                <button id="calculator_service_selected_1" type="button"
                                                        class="c-3__dropdown" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><span
                                                        class="c-3__selected" data-calc-value="1">Writing</span> <span
                                                        class="c-3__placeholder">Service</span> <span
                                                        class="c-3__select-arrow"></span></button>
                                                <div class="c-3__menu dropdown-menu"
                                                     aria-labelledby="calculator_service_selected_1">
                                                    <ul class="c-3__ul"></ul>
                                                </div>
                                            </div>
                                            <div class="select"><select id="calculator_service_1"
                                                                        aria-label="Calculator services"
                                                                        class="c-3__select"></select> <span
                                                    class="c-3__select-arrow"></span></div>
                                        </div>
                                        <div class="c-1__row">
                                            <div class="c-3 dropdown">
                                                <button id="calculator_type_selected_1" type="button"
                                                        class="c-3__dropdown" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><span
                                                        class="c-3__selected"
                                                        data-calc-value="1">Assignment (any type)</span> <span
                                                        class="c-3__placeholder">Type of paper</span> <span
                                                        class="c-3__select-arrow"></span></button>
                                                <div class="c-3__menu dropdown-menu"
                                                     aria-labelledby="calculator_type_selected_1"><input
                                                        id="searchTypesInput" class="c-3__search" type="text"
                                                        placeholder="Type to find">
                                                    <div class="c-3__ul"></div>
                                                </div>
                                            </div>
                                            <div class="select"><select id="calculator_type_1"
                                                                        aria-label="Type of calculator"
                                                                        class="c-3__select"></select> <span
                                                    class="c-3__select-arrow"></span></div>
                                        </div>
                                        <div class="c-1__row">
                                            <div class="c-3 dropdown">
                                                <button id="calculator_deadline_selected_1" type="button"
                                                        class="c-3__dropdown" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"><span
                                                        class="c-3__selected" data-calc-value="336">2 weeks</span> <span
                                                        class="c-3__placeholder">Deadline</span> <span
                                                        class="c-3__select-arrow"></span></button>
                                                <div class="c-3__menu dropdown-menu"
                                                     aria-labelledby="calculator_deadline_selected_1">
                                                    <ul class="c-3__ul">
                                                        <li class="c-3__li" data-calc-value="6">6 hours</li>
                                                        <li class="c-3__li" data-calc-value="12">12 hours</li>
                                                        <li class="c-3__li" data-calc-value="24">1 day</li>
                                                        <li class="c-3__li" data-calc-value="48">2 days</li>
                                                        <li class="c-3__li" data-calc-value="72">3 days</li>
                                                        <li class="c-3__li" data-calc-value="120">5 days</li>
                                                        <li class="c-3__li" data-calc-value="168">7 days</li>
                                                        <li class="c-3__li" data-calc-value="240">10 days</li>
                                                        <li class="c-3__li" data-calc-value="336">2 weeks</li>
                                                        <li class="c-3__li" data-calc-value="720">1 month</li>
                                                        <li class="c-3__li" data-calc-value="1440">2 months</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="select"><select id="calculator_deadline_1"
                                                                        aria-label="Calculators's deadline"
                                                                        class="c-3__select">
                                                    <option value="6">6 hours</option>
                                                    <option value="12">12 hours</option>
                                                    <option value="24">1 day</option>
                                                    <option value="48">2 days</option>
                                                    <option value="72">3 days</option>
                                                    <option value="120">5 days</option>
                                                    <option value="168">7 days</option>
                                                    <option value="240">10 days</option>
                                                    <option value="336" selected="selected">2 weeks</option>
                                                    <option value="720">1 month</option>
                                                    <option value="1440">2 months</option>
                                                </select> <span class="c-3__select-arrow"></span></div>
                                        </div>
                                        <div id="pages_fields_1" class="c-1__row">
                                            <div class="c-1__group">
                                                <div class="c-1__element">
                                                    <button id="calculator_pages_decrement_1" type="button"
                                                            aria-label="calculator pages decrement"
                                                            class="c-3__button-decrement"></button>
                                                </div>
                                                <div class="c-1__element">
                                                    <div class="dropdown dropdown-half">
                                                        <button id="calculator_pages_selected_1" type="button"
                                                                class="c-3__dropdown-half" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><span
                                                                class="c-3__selected" data-calc-value="1">1 page</span>
                                                            <span class="c-3__placeholder">Pages</span> <span
                                                                class="c-3__select-arrow"></span></button>
                                                        <div class="c-3__menu dropdown-menu"
                                                             aria-labelledby="calculator_pages_selected_1">
                                                            <ul class="c-3__ul pages__list">
                                                                <li class="c-3__li" data-calc-value="1">1 page</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="select"><select id="calculator_pages_1"
                                                                                aria-label="Calculators pages"
                                                                                class="c-3__select-half">
                                                            <option value="1" selected="selected">1 page</option>
                                                        </select> <span class="c-3__select-arrow"></span></div>
                                                </div>
                                                <div class="c-1__element">
                                                    <button id="calculator_pages_increment_1" type="button"
                                                            aria-label="calculator pages increment"
                                                            class="c-3__button-increment"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-1__footer">
                                        <div class="c-1__price">
                                            <div class="c-1__price__wrap">
                                                <div class="value c-1__price--min">$<span
                                                        id="calculator_total_1">0</span></div>
                                                <div class="c-1__price__label">Minimum Price</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="button-filled__primary ga-event"
                                                data-ga-category="calculator" data-ga-action="click"
                                                data-ga-label="Continue"><span class="button-text">Continue</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="s-2 bggrey">
            <div class="l-0">
                <div class="h--md">All services from Assignment.IO</div>
                <p class="p--md">Our Assignment writers can help with these assignments and more:</p>
                <div class="s-2__w">
                    <div class="s-2__c">
                        <ul class="s-2__ul">
                            <li class="s-2__li">Custom Assignment (any type)</li>
                            <li class="s-2__li">Business Plan</li>
                            <li class="s-2__li">Literature Review</li>
                            <li class="s-2__li">Research Paper</li>
                            <li class="s-2__li">Admission Assignment</li>
                            <li class="s-2__li">Case Study</li>
                            <li class="s-2__li">Multiple Choice Questions</li>
                            <li class="s-2__li">Research Proposal</li>
                            <li class="s-2__li">Annotated Bibliography</li>
                            <li class="s-2__li">Coursework</li>
                            <li class="s-2__li">Presentation or Speech</li>
                            <li class="s-2__li">Term Paper</li>
                            <li class="s-2__li">Article Review</li>
                            <li class="s-2__li">Creative Writing</li>
                            <li class="s-2__li">Reflective Writing</li>
                            <li class="s-2__li">Thesis / Dissertation</li>
                            <li class="s-2__li">Book / Movie Review</li>
                            <li class="s-2__li">Critical Thinking / Review</li>
                            <li class="s-2__li">Report</li>
                            <li class="s-2__li">Editing and proofreading</li>
                        </ul>
                    </div>
                </div>
                <div class="s-2__b-g"><span data-link="https://app.Assignment.IO.com/auth/register"
                                            class="button-filled__primary ga-event h-l" data-ga-category=""
                                            data-ga-action="click" data-ga-label="order now"><span class="button-text">order now</span></span>
                </div>
            </div>
        </section>
        <section class="s-4 pb-0">
            <div class="l-0">
                <div class="s-4__w">
                    <div class="h--md _c--primary">Features of Our Assignment Writing Service</div>
                    <ul class="s-4__ul">
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__deadline"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Any Deadline - Any Subject</div>
                                <p class="p--sm">Our professional writers can complete any assignment, regardless of
                                    topic, difficulty, or deadline.</p></div>
                        </li>
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__notifications"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Email and SMS Notifications</div>
                                <p class="p--sm">Stay informed <sup>24</sup>⁄<sub>7</sub> about every update of the
                                    whole ordering process.</p></div>
                        </li>
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__chat"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Chat With Your Writer</div>
                                <p class="p--sm">Communicate directly with your writer anytime regarding assignment
                                    details, edit requests, etc.</p></div>
                        </li>
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__profiles"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Detailed Writer Profiles</div>
                                <p class="p--sm">Browse ratings, reviews, number of completed assignments, and subject
                                    proficiency regarding our Assignment writers.</p></div>
                        </li>
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__plagiarism"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Plagiarism Free Papers</div>
                                <p class="p--sm">Our quality assurance team reviews every paper completed to make sure
                                    each paper written by our writers is unique and not plagiarised.</p></div>
                        </li>
                        <li class="s-4__li">
                            <div class="s-4__i"><i class="icon features-icon__prices"></i></div>
                            <div class="s-4__d">
                                <div class="h--sm">Affordable Prices</div>
                                <p class="p--sm">We offer the lowest prices per page in the industry with an average of
                                    $11 per page.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
<section>   </section>
    </div>
    <p></p>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?GTM-KZ3B2L" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <noscript>
        <div style="display:inline"><img height="1" width="1" style="border-style:none" alt
                                         src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/878019161/?guid=ON&amp;script=0">
        </div>
    </noscript>
</div>

<?php
require_once APPROOT . '/views/inc/footer.php';
?>

</body>

</html>
