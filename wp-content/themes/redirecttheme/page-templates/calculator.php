<?php
/*
Template Name: Calculator
*/
get_header(); ?>


<section class="calculator">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-6 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="calculator__headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>
                <?php endif; ?>

                <div class="calculator__input reveal-up load-hidden">
                    <div class="waiver-calc__inputs">
                        <div class="waiver-calc__inputs-label">Calculate Your Variables</div>

                        <!-- Total Units -->
                        <div class="waiver-calc__field">
                            <label for="calcTotalUnits">Total Units</label>
                            <input type="number" id="calcTotalUnits" value="1000" min="1" step="1">
                        </div>

                        <!-- Waiver Participation % -->
                        <div class="waiver-calc__slider-field">
                            <div class="waiver-calc__slider-header">
                                <label>Waiver Participation % <span class="waiver-calc__tip" data-tip="Percentage of units participating in the waiver program.">?</span></label>
                                <span class="waiver-calc__slider-value" id="calcParticipationDisplay">35%</span>
                            </div>
                            <div class="waiver-calc__range-track">
                                <div class="waiver-calc__range-fill" id="calcPartFill"></div>
                                <input type="range" id="calcParticipationPct" min="0" max="100" value="35" step="1">
                            </div>
                        </div>

                        <!-- Cost + Markup row -->
                        <div class="waiver-calc__field-row">
                            <div class="waiver-calc__field">
                                <label for="calcWaiverCost">The Waiver Cost per Unit <span class="waiver-calc__tip" data-tip="Monthly cost per participating unit.">?</span></label>
                                <select id="calcWaiverCost">
                                    <option value="6.00">$6.00</option>
                                    <option value="6.50">$6.50</option>
                                    <option value="7.00">$7.00</option>
                                    <option value="7.50">$7.50</option>
                                    <option value="8.00" selected>$8.00</option>
                                    <option value="8.50">$8.50</option>
                                    <option value="8.95">$8.95</option>
                                    <option value="9.00">$9.00</option>
                                    <option value="9.50">$9.50</option>
                                    <option value="10.00">$10.00</option>
                                </select>
                            </div>
                            <div class="waiver-calc__field">
                                <label for="calcPreferredMarkup">Preferred Markup <span class="waiver-calc__tip" data-tip="Monthly markup charged to residents per participating unit.">?</span></label>
                                <select id="calcPreferredMarkup">
                                    <option value="0.00">$0.00</option>
                                    <option value="1.00">$1.00</option>
                                    <option value="2.00">$2.00</option>
                                    <option value="3.00">$3.00</option>
                                    <option value="4.00" selected>$4.00</option>
                                    <option value="5.00">$5.00</option>
                                    <option value="6.00">$6.00</option>
                                    <option value="7.00">$7.00</option>
                                    <option value="8.00">$8.00</option>
                                </select>
                            </div>
                        </div>

                        <!-- Derived: Total Additional Rent Per Unit -->
                        <div class="waiver-calc__derived-row">
                            <span class="waiver-calc__derived-label">Total Additional Rent Per Unit</span>
                            <span class="waiver-calc__derived-value" id="calcRentPerUnit">$12.50</span>
                        </div>

                        <!-- Cap Rate -->
                        <div class="waiver-calc__slider-field" style="margin-top: 24px;">
                            <div class="waiver-calc__slider-header">
                                <label>Cap Rate <span class="waiver-calc__tip" data-tip="Ancillary revenue &divide; cap rate = increase in asset value.">?</span></label>
                                <span class="waiver-calc__slider-value" id="calcCapRateDisplay">5.5%</span>
                            </div>
                            <div class="waiver-calc__range-track">
                                <div class="waiver-calc__range-fill" id="calcCapFill"></div>
                                <input type="range" id="calcCapRate" min="1" max="15" value="5.5" step="0.5">
                            </div>
                        </div>

                        <!-- Derived: Claims Paid -->
                        <div class="waiver-calc__derived-row">
                            <span class="waiver-calc__derived-label">Claims Paid</span>
                            <span class="waiver-calc__derived-value" id="calcClaimsPaidDisplay">10,000</span>
                        </div>

                        <!-- Claims Paid input -->
                        <div class="waiver-calc__field hide">
                            <label for="calcClaimsPaid">Claims Paid (Annual) <span class="waiver-calc__tip" data-tip="Annual claims paid out.">?</span></label>
                            <input type="number" id="calcClaimsPaid" value="10000" min="0" step="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class='small-12 large-6 cell'>
                <div class="calculator__results reveal-up load-hidden">

                    <!-- Billboard SVG (inline for JS text updates) -->
                    <div class="waiver-calc__billboard">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="606.39" height="497" viewBox="0 0 606.39 497">
                        <defs>
                            <clipPath id="clip-path">
                            <rect id="Rectangle_2323" data-name="Rectangle 2323" width="542.017" height="269.026" fill="none"/>
                            </clipPath>
                            <clipPath id="clip-path-12">
                            <rect id="Rectangle_2313" data-name="Rectangle 2313" width="10.664" height="61.377" fill="none"/>
                            </clipPath>
                            <clipPath id="clip-path-13">
                            <rect id="Rectangle_2315" data-name="Rectangle 2315" width="19.725" height="92.097" fill="none"/>
                            </clipPath>
                            <clipPath id="clip-path-14">
                            <rect id="Rectangle_2317" data-name="Rectangle 2317" width="11.394" height="92.097" fill="none"/>
                            </clipPath>
                            <clipPath id="clip-path-15">
                            <rect id="Rectangle_2319" data-name="Rectangle 2319" width="10.664" height="117.521" fill="none"/>
                            </clipPath>
                            <clipPath id="clip-path-16">
                            <rect id="Rectangle_2321" data-name="Rectangle 2321" width="10.664" height="118.605" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="Group_549" data-name="Group 549" transform="translate(-833 -187)">
                            <rect id="Rectangle_2333" data-name="Rectangle 2333" width="56" height="33" transform="translate(901 684) rotate(-90)" fill="#363533"/>
                            <rect id="Rectangle_2334" data-name="Rectangle 2334" width="56" height="33" transform="translate(1265 684) rotate(-90)" fill="#363533"/>
                            <g id="Group_548" data-name="Group 548">
                            <g id="Group_512" data-name="Group 512" transform="translate(897.373 187)">
                                <g id="Group_511" data-name="Group 511" clip-path="url(#clip-path)">
                                <rect id="Rectangle_1909" data-name="Rectangle 1909" width="78.194" height="110.333" transform="translate(68.272 158.016)" fill="#4daa7f"/>
                                <g id="Group_477" data-name="Group 477">
                                    <g id="Group_476" data-name="Group 476" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_1910" data-name="Rectangle 1910" width="78.194" height="110.333" transform="translate(68.273 158.016)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_1912" data-name="Rectangle 1912" width="11.661" height="11.661" transform="translate(75.388 164.577)" fill="#3a8e64"/>
                                <rect id="Rectangle_1913" data-name="Rectangle 1913" width="11.661" height="11.661" transform="translate(75.388 164.577)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1914" data-name="Rectangle 1914" width="11.661" height="11.661" transform="translate(94.168 164.577)" fill="#3a8e64"/>
                                <rect id="Rectangle_1915" data-name="Rectangle 1915" width="11.661" height="11.661" transform="translate(94.168 164.577)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1916" data-name="Rectangle 1916" width="55.682" height="109.481" transform="translate(47.977 40.028)" fill="#058098"/>
                                <rect id="Rectangle_1917" data-name="Rectangle 1917" width="55.682" height="109.481" transform="translate(47.977 40.028)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1918" data-name="Rectangle 1918" width="32.107" height="88.015" transform="translate(15.87 80.399)" fill="#058098"/>
                                <rect id="Rectangle_1919" data-name="Rectangle 1919" width="32.107" height="88.015" transform="translate(15.87 80.399)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1920" data-name="Rectangle 1920" width="37.504" height="90.523" transform="translate(0.677 177.4)" fill="#058098"/>
                                <g id="Group_479" data-name="Group 479">
                                    <g id="Group_478" data-name="Group 478" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_1921" data-name="Rectangle 1921" width="37.504" height="90.523" transform="translate(0.677 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_1923" data-name="Rectangle 1923" width="11.661" height="11.661" transform="translate(56.61 49.399)" fill="#214961"/>
                                <rect id="Rectangle_1924" data-name="Rectangle 1924" width="11.661" height="11.661" transform="translate(56.61 49.399)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1925" data-name="Rectangle 1925" width="11.661" height="11.661" transform="translate(75.388 49.399)" fill="#214961"/>
                                <rect id="Rectangle_1926" data-name="Rectangle 1926" width="11.661" height="11.661" transform="translate(75.388 49.399)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1927" data-name="Rectangle 1927" width="11.661" height="11.661" transform="translate(94.168 49.399)" fill="#214961"/>
                                <rect id="Rectangle_1928" data-name="Rectangle 1928" width="11.661" height="11.661" transform="translate(94.168 49.399)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1929" data-name="Rectangle 1929" width="11.661" height="11.661" transform="translate(56.61 67.925)" fill="#214961"/>
                                <rect id="Rectangle_1930" data-name="Rectangle 1930" width="11.661" height="11.661" transform="translate(56.61 67.925)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1931" data-name="Rectangle 1931" width="23.83" height="11.661" transform="translate(24.27 90.566)" fill="#214961"/>
                                <rect id="Rectangle_1932" data-name="Rectangle 1932" width="23.83" height="11.661" transform="translate(24.27 90.566)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1933" data-name="Rectangle 1933" width="23.83" height="11.661" transform="translate(24.27 110.018)" fill="#214961"/>
                                <rect id="Rectangle_1934" data-name="Rectangle 1934" width="23.83" height="11.661" transform="translate(24.27 110.018)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1935" data-name="Rectangle 1935" width="23.83" height="11.661" transform="translate(24.27 129.469)" fill="#214961"/>
                                <rect id="Rectangle_1936" data-name="Rectangle 1936" width="23.83" height="11.661" transform="translate(24.27 129.469)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1937" data-name="Rectangle 1937" width="23.83" height="11.661" transform="translate(24.27 148.921)" fill="#214961"/>
                                <rect id="Rectangle_1938" data-name="Rectangle 1938" width="23.83" height="11.661" transform="translate(24.27 148.921)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1939" data-name="Rectangle 1939" width="11.661" height="11.661" transform="translate(16.835 187.322)" fill="#214961"/>
                                <rect id="Rectangle_1940" data-name="Rectangle 1940" width="11.661" height="11.661" transform="translate(16.835 187.322)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1941" data-name="Rectangle 1941" width="11.661" height="11.661" transform="translate(16.835 205.947)" fill="#214961"/>
                                <rect id="Rectangle_1942" data-name="Rectangle 1942" width="11.661" height="11.661" transform="translate(16.835 205.947)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1943" data-name="Rectangle 1943" width="11.661" height="11.661" transform="translate(16.835 224.572)" fill="#214961"/>
                                <rect id="Rectangle_1944" data-name="Rectangle 1944" width="11.661" height="11.661" transform="translate(16.835 224.572)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1945" data-name="Rectangle 1945" width="11.661" height="11.661" transform="translate(16.835 243.197)" fill="#214961"/>
                                <rect id="Rectangle_1946" data-name="Rectangle 1946" width="11.661" height="11.661" transform="translate(16.835 243.197)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1947" data-name="Rectangle 1947" width="11.661" height="11.661" transform="translate(75.388 67.925)" fill="#214961"/>
                                <rect id="Rectangle_1948" data-name="Rectangle 1948" width="11.661" height="11.661" transform="translate(75.388 67.925)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1949" data-name="Rectangle 1949" width="11.661" height="11.661" transform="translate(94.168 67.925)" fill="#214961"/>
                                <rect id="Rectangle_1950" data-name="Rectangle 1950" width="11.661" height="11.661" transform="translate(94.168 67.925)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1951" data-name="Rectangle 1951" width="11.661" height="11.661" transform="translate(56.61 86.45)" fill="#214961"/>
                                <rect id="Rectangle_1952" data-name="Rectangle 1952" width="11.661" height="11.661" transform="translate(56.61 86.45)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1953" data-name="Rectangle 1953" width="11.661" height="11.661" transform="translate(75.388 86.45)" fill="#214961"/>
                                <rect id="Rectangle_1954" data-name="Rectangle 1954" width="11.661" height="11.661" transform="translate(75.388 86.45)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1955" data-name="Rectangle 1955" width="11.661" height="11.661" transform="translate(94.168 86.45)" fill="#214961"/>
                                <rect id="Rectangle_1956" data-name="Rectangle 1956" width="11.661" height="11.661" transform="translate(94.168 86.45)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1957" data-name="Rectangle 1957" width="11.661" height="11.661" transform="translate(56.61 104.975)" fill="#214961"/>
                                <rect id="Rectangle_1958" data-name="Rectangle 1958" width="11.661" height="11.661" transform="translate(56.61 104.975)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1959" data-name="Rectangle 1959" width="11.661" height="11.661" transform="translate(75.388 104.975)" fill="#214961"/>
                                <rect id="Rectangle_1960" data-name="Rectangle 1960" width="11.661" height="11.661" transform="translate(75.388 104.975)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1961" data-name="Rectangle 1961" width="11.661" height="11.661" transform="translate(94.168 104.975)" fill="#214961"/>
                                <rect id="Rectangle_1962" data-name="Rectangle 1962" width="11.661" height="11.661" transform="translate(94.168 104.975)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1963" data-name="Rectangle 1963" width="11.661" height="11.661" transform="translate(75.388 123.5)" fill="#214961"/>
                                <rect id="Rectangle_1964" data-name="Rectangle 1964" width="11.661" height="11.661" transform="translate(75.388 123.5)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1965" data-name="Rectangle 1965" width="11.661" height="11.661" transform="translate(94.168 123.5)" fill="#214961"/>
                                <rect id="Rectangle_1966" data-name="Rectangle 1966" width="11.661" height="11.661" transform="translate(94.168 123.5)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1967" data-name="Rectangle 1967" width="11.661" height="11.661" transform="translate(75.388 142.025)" fill="#214961"/>
                                <rect id="Rectangle_1968" data-name="Rectangle 1968" width="11.661" height="11.661" transform="translate(75.388 142.025)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1969" data-name="Rectangle 1969" width="11.661" height="11.661" transform="translate(94.168 142.025)" fill="#214961"/>
                                <rect id="Rectangle_1970" data-name="Rectangle 1970" width="11.661" height="11.661" transform="translate(94.168 142.025)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1971" data-name="Rectangle 1971" width="11.661" height="11.661" transform="translate(112.946 164.577)" fill="#3a8e64"/>
                                <rect id="Rectangle_1972" data-name="Rectangle 1972" width="11.661" height="11.661" transform="translate(112.946 164.577)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1973" data-name="Rectangle 1973" width="62.023" height="132.129" transform="translate(479.316 136.22)" fill="#4daa7f"/>
                                <g id="Group_481" data-name="Group 481">
                                    <g id="Group_480" data-name="Group 480" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_1974" data-name="Rectangle 1974" width="62.023" height="132.129" transform="translate(479.317 136.22)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_1976" data-name="Rectangle 1976" width="11.661" height="11.661" transform="translate(486.432 143.566)" fill="#3a8e64"/>
                                <rect id="Rectangle_1977" data-name="Rectangle 1977" width="11.661" height="11.661" transform="translate(486.432 143.566)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1978" data-name="Rectangle 1978" width="11.661" height="11.661" transform="translate(505.21 143.566)" fill="#3a8e64"/>
                                <rect id="Rectangle_1979" data-name="Rectangle 1979" width="11.661" height="11.661" transform="translate(505.21 143.566)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1980" data-name="Rectangle 1980" width="11.661" height="11.661" transform="translate(523.99 143.566)" fill="#3a8e64"/>
                                <rect id="Rectangle_1981" data-name="Rectangle 1981" width="11.661" height="11.661" transform="translate(523.99 143.566)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1982" data-name="Rectangle 1982" width="11.661" height="11.661" transform="translate(486.432 160.539)" fill="#3a8e64"/>
                                <rect id="Rectangle_1983" data-name="Rectangle 1983" width="11.661" height="11.661" transform="translate(486.432 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1984" data-name="Rectangle 1984" width="11.661" height="11.661" transform="translate(505.21 160.539)" fill="#3a8e64"/>
                                <rect id="Rectangle_1985" data-name="Rectangle 1985" width="11.661" height="11.661" transform="translate(505.21 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1986" data-name="Rectangle 1986" width="11.661" height="11.661" transform="translate(523.99 160.539)" fill="#ebe856"/>
                                <rect id="Rectangle_1987" data-name="Rectangle 1987" width="11.661" height="11.661" transform="translate(523.99 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1988" data-name="Rectangle 1988" width="11.661" height="11.661" transform="translate(486.432 177.513)" fill="#3a8e64"/>
                                <rect id="Rectangle_1989" data-name="Rectangle 1989" width="11.661" height="11.661" transform="translate(486.432 177.513)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1990" data-name="Rectangle 1990" width="11.661" height="11.661" transform="translate(505.21 177.513)" fill="#3a8e64"/>
                                <rect id="Rectangle_1991" data-name="Rectangle 1991" width="11.661" height="11.661" transform="translate(505.21 177.513)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1992" data-name="Rectangle 1992" width="11.661" height="11.661" transform="translate(523.99 177.513)" fill="#3a8e64"/>
                                <rect id="Rectangle_1993" data-name="Rectangle 1993" width="11.661" height="11.661" transform="translate(523.99 177.513)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1994" data-name="Rectangle 1994" width="11.661" height="11.661" transform="translate(486.432 194.486)" fill="#3a8e64"/>
                                <rect id="Rectangle_1995" data-name="Rectangle 1995" width="11.661" height="11.661" transform="translate(486.432 194.486)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1996" data-name="Rectangle 1996" width="11.661" height="11.661" transform="translate(505.21 194.486)" fill="#ebe856"/>
                                <rect id="Rectangle_1997" data-name="Rectangle 1997" width="11.661" height="11.661" transform="translate(505.21 194.486)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_1998" data-name="Rectangle 1998" width="11.661" height="11.661" transform="translate(523.99 194.486)" fill="#3a8e64"/>
                                <rect id="Rectangle_1999" data-name="Rectangle 1999" width="11.661" height="11.661" transform="translate(523.99 194.486)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2000" data-name="Rectangle 2000" width="11.661" height="11.661" transform="translate(486.432 211.46)" fill="#3a8e64"/>
                                <rect id="Rectangle_2001" data-name="Rectangle 2001" width="11.661" height="11.661" transform="translate(486.432 211.46)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2002" data-name="Rectangle 2002" width="11.661" height="11.661" transform="translate(505.21 211.46)" fill="#3a8e64"/>
                                <rect id="Rectangle_2003" data-name="Rectangle 2003" width="11.661" height="11.661" transform="translate(505.21 211.46)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2004" data-name="Rectangle 2004" width="11.661" height="11.661" transform="translate(523.99 211.46)" fill="#3a8e64"/>
                                <rect id="Rectangle_2005" data-name="Rectangle 2005" width="11.661" height="11.661" transform="translate(523.99 211.46)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2006" data-name="Rectangle 2006" width="11.661" height="11.661" transform="translate(486.432 228.433)" fill="#3a8e64"/>
                                <rect id="Rectangle_2007" data-name="Rectangle 2007" width="11.661" height="11.661" transform="translate(486.432 228.433)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2008" data-name="Rectangle 2008" width="11.661" height="11.661" transform="translate(505.21 228.433)" fill="#3a8e64"/>
                                <rect id="Rectangle_2009" data-name="Rectangle 2009" width="11.661" height="11.661" transform="translate(505.21 228.433)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2010" data-name="Rectangle 2010" width="11.661" height="11.661" transform="translate(523.99 228.433)" fill="#3a8e64"/>
                                <rect id="Rectangle_2011" data-name="Rectangle 2011" width="11.661" height="11.661" transform="translate(523.99 228.433)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2012" data-name="Rectangle 2012" width="11.661" height="11.661" transform="translate(486.432 245.407)" fill="#3a8e64"/>
                                <rect id="Rectangle_2013" data-name="Rectangle 2013" width="11.661" height="11.661" transform="translate(486.432 245.407)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2014" data-name="Rectangle 2014" width="11.661" height="11.661" transform="translate(505.21 245.407)" fill="#3a8e64"/>
                                <rect id="Rectangle_2015" data-name="Rectangle 2015" width="11.661" height="11.661" transform="translate(505.21 245.407)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2016" data-name="Rectangle 2016" width="11.661" height="11.661" transform="translate(523.99 245.407)" fill="#3a8e64"/>
                                <rect id="Rectangle_2017" data-name="Rectangle 2017" width="11.661" height="11.661" transform="translate(523.99 245.407)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2018" data-name="Rectangle 2018" width="11.661" height="11.661" transform="translate(131.321 164.577)" fill="#3a8e64"/>
                                <rect id="Rectangle_2019" data-name="Rectangle 2019" width="11.661" height="11.661" transform="translate(131.321 164.577)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2020" data-name="Rectangle 2020" width="11.661" height="11.661" transform="translate(75.388 182.346)" fill="#3a8e64"/>
                                <rect id="Rectangle_2021" data-name="Rectangle 2021" width="11.661" height="11.661" transform="translate(75.388 182.346)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2022" data-name="Rectangle 2022" width="11.661" height="11.661" transform="translate(94.168 182.346)" fill="#3a8e64"/>
                                <rect id="Rectangle_2023" data-name="Rectangle 2023" width="11.661" height="11.661" transform="translate(94.168 182.346)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2024" data-name="Rectangle 2024" width="11.661" height="11.661" transform="translate(112.946 182.346)" fill="#3a8e64"/>
                                <rect id="Rectangle_2025" data-name="Rectangle 2025" width="11.661" height="11.661" transform="translate(112.946 182.346)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2026" data-name="Rectangle 2026" width="11.661" height="11.661" transform="translate(131.321 182.346)" fill="#3a8e64"/>
                                <rect id="Rectangle_2027" data-name="Rectangle 2027" width="11.661" height="11.661" transform="translate(131.321 182.346)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2028" data-name="Rectangle 2028" width="11.661" height="11.661" transform="translate(75.388 200.116)" fill="#3a8e64"/>
                                <rect id="Rectangle_2029" data-name="Rectangle 2029" width="11.661" height="11.661" transform="translate(75.388 200.116)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2030" data-name="Rectangle 2030" width="11.661" height="11.661" transform="translate(94.168 200.116)" fill="#3a8e64"/>
                                <rect id="Rectangle_2031" data-name="Rectangle 2031" width="11.661" height="11.661" transform="translate(94.168 200.116)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2032" data-name="Rectangle 2032" width="11.661" height="11.661" transform="translate(112.946 200.116)" fill="#ebe856"/>
                                <rect id="Rectangle_2033" data-name="Rectangle 2033" width="11.661" height="11.661" transform="translate(112.946 200.116)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2034" data-name="Rectangle 2034" width="11.661" height="11.661" transform="translate(131.321 200.116)" fill="#3a8e64"/>
                                <rect id="Rectangle_2035" data-name="Rectangle 2035" width="11.661" height="11.661" transform="translate(131.321 200.116)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2036" data-name="Rectangle 2036" width="11.661" height="11.661" transform="translate(75.388 217.885)" fill="#3a8e64"/>
                                <rect id="Rectangle_2037" data-name="Rectangle 2037" width="11.661" height="11.661" transform="translate(75.388 217.885)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2038" data-name="Rectangle 2038" width="11.661" height="11.661" transform="translate(94.168 217.885)" fill="#3a8e64"/>
                                <rect id="Rectangle_2039" data-name="Rectangle 2039" width="11.661" height="11.661" transform="translate(94.168 217.885)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2040" data-name="Rectangle 2040" width="11.661" height="11.661" transform="translate(112.946 217.885)" fill="#3a8e64"/>
                                <rect id="Rectangle_2041" data-name="Rectangle 2041" width="11.661" height="11.661" transform="translate(112.946 217.885)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2042" data-name="Rectangle 2042" width="11.661" height="11.661" transform="translate(131.321 217.885)" fill="#3a8e64"/>
                                <rect id="Rectangle_2043" data-name="Rectangle 2043" width="11.661" height="11.661" transform="translate(131.321 217.885)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2044" data-name="Rectangle 2044" width="11.661" height="11.661" transform="translate(75.388 235.655)" fill="#ebe856"/>
                                <rect id="Rectangle_2045" data-name="Rectangle 2045" width="11.661" height="11.661" transform="translate(75.388 235.655)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2046" data-name="Rectangle 2046" width="11.661" height="11.661" transform="translate(94.168 235.655)" fill="#3a8e64"/>
                                <rect id="Rectangle_2047" data-name="Rectangle 2047" width="11.661" height="11.661" transform="translate(94.168 235.655)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2048" data-name="Rectangle 2048" width="11.661" height="11.661" transform="translate(112.946 235.655)" fill="#3a8e64"/>
                                <rect id="Rectangle_2049" data-name="Rectangle 2049" width="11.661" height="11.661" transform="translate(112.946 235.655)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2050" data-name="Rectangle 2050" width="11.661" height="11.661" transform="translate(131.321 235.655)" fill="#3a8e64"/>
                                <rect id="Rectangle_2051" data-name="Rectangle 2051" width="11.661" height="11.661" transform="translate(131.321 235.655)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2052" data-name="Rectangle 2052" width="11.661" height="11.661" transform="translate(75.388 253.424)" fill="#3a8e64"/>
                                <rect id="Rectangle_2053" data-name="Rectangle 2053" width="11.661" height="11.661" transform="translate(75.388 253.424)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2054" data-name="Rectangle 2054" width="11.661" height="11.661" transform="translate(94.168 253.424)" fill="#3a8e64"/>
                                <rect id="Rectangle_2055" data-name="Rectangle 2055" width="11.661" height="11.661" transform="translate(94.168 253.424)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2056" data-name="Rectangle 2056" width="11.661" height="11.661" transform="translate(112.946 253.424)" fill="#3a8e64"/>
                                <rect id="Rectangle_2057" data-name="Rectangle 2057" width="11.661" height="11.661" transform="translate(112.946 253.424)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2058" data-name="Rectangle 2058" width="11.661" height="11.661" transform="translate(131.321 253.424)" fill="#3a8e64"/>
                                <rect id="Rectangle_2059" data-name="Rectangle 2059" width="11.661" height="11.661" transform="translate(131.321 253.424)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2060" data-name="Rectangle 2060" width="97.908" height="139.845" transform="translate(103.659 9.663)" fill="#191817"/>
                                <rect id="Rectangle_2061" data-name="Rectangle 2061" width="97.908" height="139.845" transform="translate(103.659 9.663)" fill="none" stroke="#191817" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2062" data-name="Rectangle 2062" width="104.043" height="166.71" transform="translate(139.046 101.639)" fill="#8b5ba3"/>
                                <g id="Group_483" data-name="Group 483">
                                    <g id="Group_482" data-name="Group 482" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2063" data-name="Rectangle 2063" width="104.043" height="166.709" transform="translate(139.045 101.64)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2065" data-name="Rectangle 2065" width="29.956" height="152.562" transform="translate(38.317 115.787)" fill="#8b5ba3"/>
                                <g id="Group_485" data-name="Group 485">
                                    <g id="Group_484" data-name="Group 484" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2066" data-name="Rectangle 2066" width="29.956" height="152.562" transform="translate(38.317 115.787)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2068" data-name="Rectangle 2068" width="236.227" height="92.111" transform="translate(243.088 176.238)" fill="#e5e3e2"/>
                                <g id="Group_487" data-name="Group 487">
                                    <g id="Group_486" data-name="Group 486" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2069" data-name="Rectangle 2069" width="236.227" height="92.111" transform="translate(243.088 176.238)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2071" data-name="Rectangle 2071" width="11.661" height="11.661" transform="translate(147.678 109.956)" fill="#63417c"/>
                                <rect id="Rectangle_2072" data-name="Rectangle 2072" width="11.661" height="11.661" transform="translate(147.678 109.956)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2073" data-name="Rectangle 2073" width="11.661" height="11.661" transform="translate(166.457 109.956)" fill="#63417c"/>
                                <rect id="Rectangle_2074" data-name="Rectangle 2074" width="11.661" height="11.661" transform="translate(166.457 109.956)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2075" data-name="Rectangle 2075" width="11.661" height="11.661" transform="translate(185.236 109.956)" fill="#63417c"/>
                                <rect id="Rectangle_2076" data-name="Rectangle 2076" width="11.661" height="11.661" transform="translate(185.236 109.956)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2077" data-name="Rectangle 2077" width="11.661" height="11.661" transform="translate(204.015 109.956)" fill="#63417c"/>
                                <rect id="Rectangle_2078" data-name="Rectangle 2078" width="11.661" height="11.661" transform="translate(204.015 109.956)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2079" data-name="Rectangle 2079" width="11.661" height="11.661" transform="translate(222.794 109.956)" fill="#63417c"/>
                                <rect id="Rectangle_2080" data-name="Rectangle 2080" width="11.661" height="11.661" transform="translate(222.794 109.956)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2081" data-name="Rectangle 2081" width="11.661" height="11.661" transform="translate(253.752 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2082" data-name="Rectangle 2082" width="11.661" height="11.661" transform="translate(253.752 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2083" data-name="Rectangle 2083" width="11.661" height="11.661" transform="translate(272.229 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2084" data-name="Rectangle 2084" width="11.661" height="11.661" transform="translate(272.229 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2085" data-name="Rectangle 2085" width="11.661" height="11.661" transform="translate(290.705 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2086" data-name="Rectangle 2086" width="11.661" height="11.661" transform="translate(290.705 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2087" data-name="Rectangle 2087" width="11.661" height="11.661" transform="translate(309.181 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2088" data-name="Rectangle 2088" width="11.661" height="11.661" transform="translate(309.181 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2089" data-name="Rectangle 2089" width="11.661" height="11.661" transform="translate(327.657 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2090" data-name="Rectangle 2090" width="11.661" height="11.661" transform="translate(327.657 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2091" data-name="Rectangle 2091" width="11.661" height="11.661" transform="translate(346.133 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2092" data-name="Rectangle 2092" width="11.661" height="11.661" transform="translate(346.133 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2093" data-name="Rectangle 2093" width="11.661" height="11.661" transform="translate(364.609 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2094" data-name="Rectangle 2094" width="11.661" height="11.661" transform="translate(364.609 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2095" data-name="Rectangle 2095" width="11.661" height="11.661" transform="translate(383.085 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2096" data-name="Rectangle 2096" width="11.661" height="11.661" transform="translate(383.085 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2097" data-name="Rectangle 2097" width="11.661" height="11.661" transform="translate(401.562 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2098" data-name="Rectangle 2098" width="11.661" height="11.661" transform="translate(401.562 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2099" data-name="Rectangle 2099" width="11.661" height="11.661" transform="translate(420.038 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2100" data-name="Rectangle 2100" width="11.661" height="11.661" transform="translate(420.038 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2101" data-name="Rectangle 2101" width="11.661" height="11.661" transform="translate(438.514 197.421)" fill="#ebe856"/>
                                <rect id="Rectangle_2102" data-name="Rectangle 2102" width="11.661" height="11.661" transform="translate(438.514 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2103" data-name="Rectangle 2103" width="11.661" height="11.661" transform="translate(456.991 197.421)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2104" data-name="Rectangle 2104" width="11.661" height="11.661" transform="translate(456.991 197.421)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2105" data-name="Rectangle 2105" width="11.661" height="11.661" transform="translate(253.752 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2106" data-name="Rectangle 2106" width="11.661" height="11.661" transform="translate(253.752 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2107" data-name="Rectangle 2107" width="11.661" height="11.661" transform="translate(272.229 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2108" data-name="Rectangle 2108" width="11.661" height="11.661" transform="translate(272.229 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2109" data-name="Rectangle 2109" width="11.661" height="11.661" transform="translate(290.705 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2110" data-name="Rectangle 2110" width="11.661" height="11.661" transform="translate(290.705 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2111" data-name="Rectangle 2111" width="11.661" height="11.661" transform="translate(309.181 216.134)" fill="#ebe856"/>
                                <rect id="Rectangle_2112" data-name="Rectangle 2112" width="11.661" height="11.661" transform="translate(309.181 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2113" data-name="Rectangle 2113" width="11.661" height="11.661" transform="translate(327.657 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2114" data-name="Rectangle 2114" width="11.661" height="11.661" transform="translate(327.657 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2115" data-name="Rectangle 2115" width="11.661" height="11.661" transform="translate(346.133 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2116" data-name="Rectangle 2116" width="11.661" height="11.661" transform="translate(346.133 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2117" data-name="Rectangle 2117" width="11.661" height="11.661" transform="translate(364.609 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2118" data-name="Rectangle 2118" width="11.661" height="11.661" transform="translate(364.609 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2119" data-name="Rectangle 2119" width="11.661" height="11.661" transform="translate(383.085 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2120" data-name="Rectangle 2120" width="11.661" height="11.661" transform="translate(383.085 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2121" data-name="Rectangle 2121" width="11.661" height="11.661" transform="translate(401.562 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2122" data-name="Rectangle 2122" width="11.661" height="11.661" transform="translate(401.562 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2123" data-name="Rectangle 2123" width="11.661" height="11.661" transform="translate(420.038 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2124" data-name="Rectangle 2124" width="11.661" height="11.661" transform="translate(420.038 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2125" data-name="Rectangle 2125" width="11.661" height="11.661" transform="translate(438.514 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2126" data-name="Rectangle 2126" width="11.661" height="11.661" transform="translate(438.514 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2127" data-name="Rectangle 2127" width="11.661" height="11.661" transform="translate(456.991 216.134)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2128" data-name="Rectangle 2128" width="11.661" height="11.661" transform="translate(456.991 216.134)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2129" data-name="Rectangle 2129" width="11.661" height="11.661" transform="translate(253.752 234.848)" fill="#ebe856"/>
                                <rect id="Rectangle_2130" data-name="Rectangle 2130" width="11.661" height="11.661" transform="translate(253.752 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2131" data-name="Rectangle 2131" width="11.661" height="11.661" transform="translate(272.229 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2132" data-name="Rectangle 2132" width="11.661" height="11.661" transform="translate(272.229 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2133" data-name="Rectangle 2133" width="11.661" height="11.661" transform="translate(290.705 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2134" data-name="Rectangle 2134" width="11.661" height="11.661" transform="translate(290.705 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2135" data-name="Rectangle 2135" width="11.661" height="11.661" transform="translate(309.181 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2136" data-name="Rectangle 2136" width="11.661" height="11.661" transform="translate(309.181 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2137" data-name="Rectangle 2137" width="11.661" height="11.661" transform="translate(327.657 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2138" data-name="Rectangle 2138" width="11.661" height="11.661" transform="translate(327.657 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2139" data-name="Rectangle 2139" width="11.661" height="11.661" transform="translate(346.133 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2140" data-name="Rectangle 2140" width="11.661" height="11.661" transform="translate(346.133 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2141" data-name="Rectangle 2141" width="11.661" height="11.661" transform="translate(364.609 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2142" data-name="Rectangle 2142" width="11.661" height="11.661" transform="translate(364.609 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2143" data-name="Rectangle 2143" width="11.661" height="11.661" transform="translate(383.085 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2144" data-name="Rectangle 2144" width="11.661" height="11.661" transform="translate(383.085 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2145" data-name="Rectangle 2145" width="11.661" height="11.661" transform="translate(401.562 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2146" data-name="Rectangle 2146" width="11.661" height="11.661" transform="translate(401.562 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2147" data-name="Rectangle 2147" width="11.661" height="11.661" transform="translate(420.038 234.848)" fill="#ebe856"/>
                                <rect id="Rectangle_2148" data-name="Rectangle 2148" width="11.661" height="11.661" transform="translate(420.038 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2149" data-name="Rectangle 2149" width="11.661" height="11.661" transform="translate(438.514 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2150" data-name="Rectangle 2150" width="11.661" height="11.661" transform="translate(438.514 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2151" data-name="Rectangle 2151" width="11.661" height="11.661" transform="translate(456.991 234.848)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2152" data-name="Rectangle 2152" width="11.661" height="11.661" transform="translate(456.991 234.848)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2153" data-name="Rectangle 2153" width="11.661" height="11.661" transform="translate(253.752 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2154" data-name="Rectangle 2154" width="11.661" height="11.661" transform="translate(253.752 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2155" data-name="Rectangle 2155" width="11.661" height="11.661" transform="translate(272.229 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2156" data-name="Rectangle 2156" width="11.661" height="11.661" transform="translate(272.229 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2157" data-name="Rectangle 2157" width="11.661" height="11.661" transform="translate(290.705 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2158" data-name="Rectangle 2158" width="11.661" height="11.661" transform="translate(290.705 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2159" data-name="Rectangle 2159" width="11.661" height="11.661" transform="translate(309.181 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2160" data-name="Rectangle 2160" width="11.661" height="11.661" transform="translate(309.181 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2161" data-name="Rectangle 2161" width="11.661" height="11.661" transform="translate(327.657 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2162" data-name="Rectangle 2162" width="11.661" height="11.661" transform="translate(327.657 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2163" data-name="Rectangle 2163" width="11.661" height="11.661" transform="translate(346.133 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2164" data-name="Rectangle 2164" width="11.661" height="11.661" transform="translate(346.133 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2165" data-name="Rectangle 2165" width="11.661" height="11.661" transform="translate(364.609 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2166" data-name="Rectangle 2166" width="11.661" height="11.661" transform="translate(364.609 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2167" data-name="Rectangle 2167" width="11.661" height="11.661" transform="translate(383.085 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2168" data-name="Rectangle 2168" width="11.661" height="11.661" transform="translate(383.085 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2169" data-name="Rectangle 2169" width="11.661" height="11.661" transform="translate(401.562 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2170" data-name="Rectangle 2170" width="11.661" height="11.661" transform="translate(401.562 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2171" data-name="Rectangle 2171" width="11.661" height="11.661" transform="translate(420.038 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2172" data-name="Rectangle 2172" width="11.661" height="11.661" transform="translate(420.038 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2173" data-name="Rectangle 2173" width="11.661" height="11.661" transform="translate(438.514 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2174" data-name="Rectangle 2174" width="11.661" height="11.661" transform="translate(438.514 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2175" data-name="Rectangle 2175" width="11.661" height="11.661" transform="translate(456.991 253.563)" fill="#b9b9ba"/>
                                <rect id="Rectangle_2176" data-name="Rectangle 2176" width="11.661" height="11.661" transform="translate(456.991 253.563)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2177" data-name="Rectangle 2177" width="11.661" height="11.661" transform="translate(147.678 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2178" data-name="Rectangle 2178" width="11.661" height="11.661" transform="translate(147.678 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2179" data-name="Rectangle 2179" width="11.661" height="11.661" transform="translate(166.457 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2180" data-name="Rectangle 2180" width="11.661" height="11.661" transform="translate(166.457 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2181" data-name="Rectangle 2181" width="11.661" height="11.661" transform="translate(185.236 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2182" data-name="Rectangle 2182" width="11.661" height="11.661" transform="translate(185.236 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2183" data-name="Rectangle 2183" width="11.661" height="11.661" transform="translate(204.015 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2184" data-name="Rectangle 2184" width="11.661" height="11.661" transform="translate(204.015 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2185" data-name="Rectangle 2185" width="11.661" height="11.661" transform="translate(222.794 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2186" data-name="Rectangle 2186" width="11.661" height="11.661" transform="translate(222.794 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2187" data-name="Rectangle 2187" width="11.661" height="11.661" transform="translate(147.678 143.679)" fill="#63417c"/>
                                <rect id="Rectangle_2188" data-name="Rectangle 2188" width="11.661" height="11.661" transform="translate(147.678 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2189" data-name="Rectangle 2189" width="11.661" height="11.661" transform="translate(166.457 143.679)" fill="#63417c"/>
                                <rect id="Rectangle_2190" data-name="Rectangle 2190" width="11.661" height="11.661" transform="translate(166.457 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2191" data-name="Rectangle 2191" width="11.661" height="11.661" transform="translate(185.236 143.679)" fill="#ebe856"/>
                                <rect id="Rectangle_2192" data-name="Rectangle 2192" width="11.661" height="11.661" transform="translate(185.236 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2193" data-name="Rectangle 2193" width="11.661" height="11.661" transform="translate(204.015 143.679)" fill="#63417c"/>
                                <rect id="Rectangle_2194" data-name="Rectangle 2194" width="11.661" height="11.661" transform="translate(204.015 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2195" data-name="Rectangle 2195" width="11.661" height="11.661" transform="translate(222.794 143.679)" fill="#63417c"/>
                                <rect id="Rectangle_2196" data-name="Rectangle 2196" width="11.661" height="11.661" transform="translate(222.794 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2197" data-name="Rectangle 2197" width="11.661" height="11.661" transform="translate(147.678 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2198" data-name="Rectangle 2198" width="11.661" height="11.661" transform="translate(147.678 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2199" data-name="Rectangle 2199" width="11.661" height="11.661" transform="translate(166.457 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2200" data-name="Rectangle 2200" width="11.661" height="11.661" transform="translate(166.457 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2201" data-name="Rectangle 2201" width="11.661" height="11.661" transform="translate(185.236 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2202" data-name="Rectangle 2202" width="11.661" height="11.661" transform="translate(185.236 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2203" data-name="Rectangle 2203" width="11.661" height="11.661" transform="translate(204.015 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2204" data-name="Rectangle 2204" width="11.661" height="11.661" transform="translate(204.015 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2205" data-name="Rectangle 2205" width="11.661" height="11.661" transform="translate(222.794 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2206" data-name="Rectangle 2206" width="11.661" height="11.661" transform="translate(222.794 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2207" data-name="Rectangle 2207" width="11.661" height="11.661" transform="translate(147.678 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2208" data-name="Rectangle 2208" width="11.661" height="11.661" transform="translate(147.678 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2209" data-name="Rectangle 2209" width="11.661" height="11.661" transform="translate(166.457 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2210" data-name="Rectangle 2210" width="11.661" height="11.661" transform="translate(166.457 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2211" data-name="Rectangle 2211" width="11.661" height="11.661" transform="translate(185.236 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2212" data-name="Rectangle 2212" width="11.661" height="11.661" transform="translate(185.236 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2213" data-name="Rectangle 2213" width="11.661" height="11.661" transform="translate(204.015 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2214" data-name="Rectangle 2214" width="11.661" height="11.661" transform="translate(204.015 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2215" data-name="Rectangle 2215" width="11.661" height="11.661" transform="translate(222.794 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2216" data-name="Rectangle 2216" width="11.661" height="11.661" transform="translate(222.794 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2217" data-name="Rectangle 2217" width="11.661" height="11.661" transform="translate(147.678 194.26)" fill="#63417c"/>
                                <rect id="Rectangle_2218" data-name="Rectangle 2218" width="11.661" height="11.661" transform="translate(147.678 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2219" data-name="Rectangle 2219" width="11.661" height="11.661" transform="translate(166.457 194.26)" fill="#ebe856"/>
                                <rect id="Rectangle_2220" data-name="Rectangle 2220" width="11.661" height="11.661" transform="translate(166.457 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2221" data-name="Rectangle 2221" width="11.661" height="11.661" transform="translate(185.236 194.26)" fill="#63417c"/>
                                <rect id="Rectangle_2222" data-name="Rectangle 2222" width="11.661" height="11.661" transform="translate(185.236 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2223" data-name="Rectangle 2223" width="11.661" height="11.661" transform="translate(204.015 194.26)" fill="#63417c"/>
                                <rect id="Rectangle_2224" data-name="Rectangle 2224" width="11.661" height="11.661" transform="translate(204.015 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2225" data-name="Rectangle 2225" width="11.661" height="11.661" transform="translate(222.794 194.26)" fill="#63417c"/>
                                <rect id="Rectangle_2226" data-name="Rectangle 2226" width="11.661" height="11.661" transform="translate(222.794 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2227" data-name="Rectangle 2227" width="11.661" height="11.661" transform="translate(147.678 211.122)" fill="#63417c"/>
                                <rect id="Rectangle_2228" data-name="Rectangle 2228" width="11.661" height="11.661" transform="translate(147.678 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2229" data-name="Rectangle 2229" width="11.661" height="11.661" transform="translate(166.457 211.122)" fill="#63417c"/>
                                <rect id="Rectangle_2230" data-name="Rectangle 2230" width="11.661" height="11.661" transform="translate(166.457 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2231" data-name="Rectangle 2231" width="11.661" height="11.661" transform="translate(185.236 211.122)" fill="#63417c"/>
                                <rect id="Rectangle_2232" data-name="Rectangle 2232" width="11.661" height="11.661" transform="translate(185.236 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2233" data-name="Rectangle 2233" width="11.661" height="11.661" transform="translate(204.015 211.122)" fill="#63417c"/>
                                <rect id="Rectangle_2234" data-name="Rectangle 2234" width="11.661" height="11.661" transform="translate(204.015 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2235" data-name="Rectangle 2235" width="11.661" height="11.661" transform="translate(222.794 211.122)" fill="#ebe856"/>
                                <rect id="Rectangle_2236" data-name="Rectangle 2236" width="11.661" height="11.661" transform="translate(222.794 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2237" data-name="Rectangle 2237" width="11.661" height="11.661" transform="translate(147.678 227.982)" fill="#63417c"/>
                                <rect id="Rectangle_2238" data-name="Rectangle 2238" width="11.661" height="11.661" transform="translate(147.678 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2239" data-name="Rectangle 2239" width="11.661" height="11.661" transform="translate(166.457 227.982)" fill="#ebe856"/>
                                <rect id="Rectangle_2240" data-name="Rectangle 2240" width="11.661" height="11.661" transform="translate(166.457 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2241" data-name="Rectangle 2241" width="11.661" height="11.661" transform="translate(185.236 227.982)" fill="#63417c"/>
                                <rect id="Rectangle_2242" data-name="Rectangle 2242" width="11.661" height="11.661" transform="translate(185.236 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2243" data-name="Rectangle 2243" width="11.661" height="11.661" transform="translate(204.015 227.982)" fill="#63417c"/>
                                <rect id="Rectangle_2244" data-name="Rectangle 2244" width="11.661" height="11.661" transform="translate(204.015 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2245" data-name="Rectangle 2245" width="11.661" height="11.661" transform="translate(222.794 227.982)" fill="#63417c"/>
                                <rect id="Rectangle_2246" data-name="Rectangle 2246" width="11.661" height="11.661" transform="translate(222.794 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2247" data-name="Rectangle 2247" width="11.661" height="11.661" transform="translate(147.678 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2248" data-name="Rectangle 2248" width="11.661" height="11.661" transform="translate(147.678 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2249" data-name="Rectangle 2249" width="11.661" height="11.661" transform="translate(47.464 126.817)" fill="#63417c"/>
                                <rect id="Rectangle_2250" data-name="Rectangle 2250" width="11.661" height="11.661" transform="translate(47.464 126.817)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2251" data-name="Rectangle 2251" width="11.661" height="11.661" transform="translate(47.464 143.679)" fill="#63417c"/>
                                <rect id="Rectangle_2252" data-name="Rectangle 2252" width="11.661" height="11.661" transform="translate(47.464 143.679)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2253" data-name="Rectangle 2253" width="11.661" height="11.661" transform="translate(47.464 160.539)" fill="#63417c"/>
                                <rect id="Rectangle_2254" data-name="Rectangle 2254" width="11.661" height="11.661" transform="translate(47.464 160.539)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2255" data-name="Rectangle 2255" width="11.661" height="11.661" transform="translate(47.464 177.4)" fill="#63417c"/>
                                <rect id="Rectangle_2256" data-name="Rectangle 2256" width="11.661" height="11.661" transform="translate(47.464 177.4)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2257" data-name="Rectangle 2257" width="11.661" height="11.661" transform="translate(47.464 194.26)" fill="#63417c"/>
                                <rect id="Rectangle_2258" data-name="Rectangle 2258" width="11.661" height="11.661" transform="translate(47.464 194.26)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2259" data-name="Rectangle 2259" width="11.661" height="11.661" transform="translate(47.464 211.122)" fill="#63417c"/>
                                <rect id="Rectangle_2260" data-name="Rectangle 2260" width="11.661" height="11.661" transform="translate(47.464 211.122)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2261" data-name="Rectangle 2261" width="11.661" height="11.661" transform="translate(47.464 227.982)" fill="#63417c"/>
                                <rect id="Rectangle_2262" data-name="Rectangle 2262" width="11.661" height="11.661" transform="translate(47.464 227.982)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2263" data-name="Rectangle 2263" width="11.661" height="11.661" transform="translate(47.464 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2264" data-name="Rectangle 2264" width="11.661" height="11.661" transform="translate(47.464 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2265" data-name="Rectangle 2265" width="11.661" height="11.661" transform="translate(166.457 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2266" data-name="Rectangle 2266" width="11.661" height="11.661" transform="translate(166.457 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2267" data-name="Rectangle 2267" width="11.661" height="11.661" transform="translate(185.236 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2268" data-name="Rectangle 2268" width="11.661" height="11.661" transform="translate(185.236 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2269" data-name="Rectangle 2269" width="11.661" height="11.661" transform="translate(204.015 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2270" data-name="Rectangle 2270" width="11.661" height="11.661" transform="translate(204.015 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2271" data-name="Rectangle 2271" width="11.661" height="11.661" transform="translate(222.794 244.843)" fill="#63417c"/>
                                <rect id="Rectangle_2272" data-name="Rectangle 2272" width="11.661" height="11.661" transform="translate(222.794 244.843)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2273" data-name="Rectangle 2273" width="104.043" height="8.986" transform="translate(139.045 92.655)" fill="#e5e3e2"/>
                                <rect id="Rectangle_2274" data-name="Rectangle 2274" width="104.043" height="8.986" transform="translate(139.045 92.655)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2275" data-name="Rectangle 2275" width="29.956" height="8.986" transform="translate(38.317 112.106)" fill="#e5e3e2"/>
                                <rect id="Rectangle_2276" data-name="Rectangle 2276" width="29.956" height="8.986" transform="translate(38.317 112.106)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2277" data-name="Rectangle 2277" width="37.639" height="8.986" transform="translate(0.677 168.415)" fill="#058098"/>
                                <g id="Group_489" data-name="Group 489">
                                    <g id="Group_488" data-name="Group 488" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2278" data-name="Rectangle 2278" width="37.639" height="8.986" transform="translate(0.677 168.415)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2280" data-name="Rectangle 2280" width="55.682" height="8.986" transform="translate(47.977 31.041)" fill="#058098"/>
                                <rect id="Rectangle_2281" data-name="Rectangle 2281" width="55.682" height="8.986" transform="translate(47.977 31.041)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2282" data-name="Rectangle 2282" width="236.227" height="8.986" transform="translate(243.088 176.238)" fill="#e5e3e2"/>
                                <rect id="Rectangle_2283" data-name="Rectangle 2283" width="236.227" height="8.986" transform="translate(243.088 176.238)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2284" data-name="Rectangle 2284" width="97.908" height="8.986" transform="translate(103.659 0.677)" fill="#e5e3e2"/>
                                <g id="Group_491" data-name="Group 491">
                                    <g id="Group_490" data-name="Group 490" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2285" data-name="Rectangle 2285" width="97.908" height="8.986" transform="translate(103.659 0.677)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2287" data-name="Rectangle 2287" width="70.772" height="8.507" transform="translate(68.273 149.509)" fill="#e5e3e2"/>
                                <rect id="Rectangle_2288" data-name="Rectangle 2288" width="70.772" height="8.507" transform="translate(68.273 149.509)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2289" data-name="Rectangle 2289" width="62.023" height="8.507" transform="translate(479.317 128.394)" fill="#e5e3e2"/>
                                <g id="Group_493" data-name="Group 493">
                                    <g id="Group_492" data-name="Group 492" clip-path="url(#clip-path)">
                                    <rect id="Rectangle_2290" data-name="Rectangle 2290" width="62.023" height="8.507" transform="translate(479.317 128.394)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                    </g>
                                </g>
                                <rect id="Rectangle_2292" data-name="Rectangle 2292" width="97.25" height="52.638" transform="translate(243.088 123.382)" fill="#ebe856"/>
                                <rect id="Rectangle_2293" data-name="Rectangle 2293" width="97.25" height="52.638" transform="translate(243.088 123.382)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2294" data-name="Rectangle 2294" width="97.25" height="8.507" transform="translate(243.088 114.875)" fill="#e5e3e2"/>
                                <rect id="Rectangle_2295" data-name="Rectangle 2295" width="97.25" height="8.507" transform="translate(243.088 114.875)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2296" data-name="Rectangle 2296" width="9.849" height="74.849" transform="translate(146.441 17.805)" fill="#363533"/>
                                <rect id="Rectangle_2297" data-name="Rectangle 2297" width="9.849" height="74.849" transform="translate(146.441 17.805)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2298" data-name="Rectangle 2298" width="9.849" height="74.849" transform="translate(164.668 17.805)" fill="#363533"/>
                                <rect id="Rectangle_2299" data-name="Rectangle 2299" width="9.849" height="74.849" transform="translate(164.668 17.805)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2300" data-name="Rectangle 2300" width="9.849" height="74.849" transform="translate(182.531 17.805)" fill="#363533"/>
                                <rect id="Rectangle_2301" data-name="Rectangle 2301" width="9.849" height="74.849" transform="translate(182.531 17.805)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2302" data-name="Rectangle 2302" width="9.849" height="131.59" transform="translate(111.36 17.806)" fill="#363533"/>
                                <rect id="Rectangle_2303" data-name="Rectangle 2303" width="9.849" height="131.59" transform="translate(111.36 17.806)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2304" data-name="Rectangle 2304" width="9.849" height="131.59" transform="translate(129.222 17.806)" fill="#363533"/>
                                <rect id="Rectangle_2305" data-name="Rectangle 2305" width="9.849" height="131.59" transform="translate(129.222 17.806)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2306" data-name="Rectangle 2306" width="87.509" height="11.661" transform="translate(243.088 130.389)" fill="#ceca0e"/>
                                <rect id="Rectangle_2307" data-name="Rectangle 2307" width="87.509" height="11.661" transform="translate(243.088 130.389)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2308" data-name="Rectangle 2308" width="87.509" height="11.661" transform="translate(243.088 147.414)" fill="#ceca0e"/>
                                <rect id="Rectangle_2309" data-name="Rectangle 2309" width="87.509" height="11.661" transform="translate(243.088 147.414)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <rect id="Rectangle_2310" data-name="Rectangle 2310" width="87.509" height="11.661" transform="translate(243.088 164.435)" fill="#ceca0e"/>
                                <rect id="Rectangle_2311" data-name="Rectangle 2311" width="87.509" height="11.661" transform="translate(243.088 164.435)" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width="1.25"/>
                                <g id="Group_510" data-name="Group 510">
                                    <g id="Group_509" data-name="Group 509" clip-path="url(#clip-path)">
                                    <g id="Group_496" data-name="Group 496" transform="translate(243.088 114.875)" opacity="0.15" style="mix-blend-mode: multiply;isolation: isolate">
                                        <g id="Group_495" data-name="Group 495" transform="translate(0)">
                                        <g id="Group_494" data-name="Group 494" clip-path="url(#clip-path-12)">
                                            <rect id="Rectangle_2312" data-name="Rectangle 2312" width="10.664" height="61.377" transform="translate(0)" fill="#191817"/>
                                        </g>
                                        </g>
                                    </g>
                                    <g id="Group_499" data-name="Group 499" transform="translate(243.088 176.252)" opacity="0.15" style="mix-blend-mode: multiply;isolation: isolate">
                                        <g id="Group_498" data-name="Group 498" transform="translate(0)">
                                        <g id="Group_497" data-name="Group 497" clip-path="url(#clip-path-13)">
                                            <rect id="Rectangle_2314" data-name="Rectangle 2314" width="19.725" height="92.097" transform="translate(0 0)" fill="#191817"/>
                                        </g>
                                        </g>
                                    </g>
                                    <g id="Group_502" data-name="Group 502" transform="translate(468.652 176.252)" opacity="0.15" style="mix-blend-mode: multiply;isolation: isolate">
                                        <g id="Group_501" data-name="Group 501">
                                        <g id="Group_500" data-name="Group 500" clip-path="url(#clip-path-14)">
                                            <rect id="Rectangle_2316" data-name="Rectangle 2316" width="11.394" height="92.097" transform="translate(0 0)" fill="#191817"/>
                                        </g>
                                        </g>
                                    </g>
                                    <g id="Group_505" data-name="Group 505" transform="translate(68.273 150.042)" opacity="0.15" style="mix-blend-mode: multiply;isolation: isolate">
                                        <g id="Group_504" data-name="Group 504" transform="translate(0)">
                                        <g id="Group_503" data-name="Group 503" clip-path="url(#clip-path-15)">
                                            <rect id="Rectangle_2318" data-name="Rectangle 2318" width="10.664" height="117.521" transform="translate(-0.001 0)" fill="#191817"/>
                                        </g>
                                        </g>
                                    </g>
                                    <g id="Group_508" data-name="Group 508" transform="translate(128.662 150.042)" opacity="0.15" style="mix-blend-mode: multiply;isolation: isolate">
                                        <g id="Group_507" data-name="Group 507" transform="translate(0)">
                                        <g id="Group_506" data-name="Group 506" clip-path="url(#clip-path-16)">
                                            <rect id="Rectangle_2320" data-name="Rectangle 2320" width="10.664" height="118.604" transform="translate(0 0)" fill="#191817"/>
                                        </g>
                                        </g>
                                    </g>
                                    </g>
                                </g>
                                </g>
                            </g>
                            <rect id="Rectangle_2324" data-name="Rectangle 2324" width="517" height="193" transform="translate(844 421)" fill="#231f20"/>
                            <text id="calcBillboardAmount" transform="translate(1095 551)" fill="#ebe855" font-size="70" font-family="Urbanist-Black, Urbanist" font-weight="800" text-anchor="middle"><tspan y="0">$21,600.00</tspan></text>
                            <rect id="Rectangle_2331" data-name="Rectangle 2331" width="539" height="14" transform="translate(833 407)" fill="#363533"/>
                            <rect id="Rectangle_2332" data-name="Rectangle 2332" width="539" height="14" transform="translate(833 614)" fill="#363533"/>
                            <text id="calcBillboardLabel" transform="translate(1095 481)" fill="#e5e3e2" font-size="16" font-family="Urbanist-Black, Urbanist" font-weight="800" text-anchor="middle"><tspan y="0">YOUR ADDITIONAL YEARLY REVENUE</tspan></text>
                            </g>
                        </g>
                        </svg>

                    </div>

                    <!-- Result lines -->
                    <div class="waiver-calc__results">
                        <div class="waiver-calc__results-inner">
                            <div class="waiver-calc__result-line">
                                <div class="waiver-calc__rl-label">Increase in Asset Value</div>
                                <div class="waiver-calc__rl-value" id="calcAssetValue">$777,777.78</div>
                            </div>
                            <div class="waiver-calc__result-line">
                                <div class="waiver-calc__rl-label">Annual Additional Rent</div>
                                <div class="waiver-calc__rl-value" id="calcAnnualRent">$60,000.00</div>
                            </div>
                            <div class="waiver-calc__result-line">
                                <div class="waiver-calc__rl-label">Net Additional Rent &amp; Claims</div>
                                <div class="waiver-calc__rl-value" id="calcNetRentClaims">$70,000.00</div>
                            </div>
                            <div class="waiver-calc__result-line">
                                <div>
                                    <div class="waiver-calc__rl-label">Annual Cost</div>
                                    <div class="waiver-calc__rl-sublabel">*(paid by resident as additional monthly rent)</div>
                                </div>
                                <div class="waiver-calc__rl-value" id="calcAnnualCost">$38,400.00</div>
                            </div>
                            <div class="waiver-calc__result-line">
                                <div>
                                    <div class="waiver-calc__rl-label">Average Monthly Cost</div>
                                    <div class="waiver-calc__rl-sublabel">*(paid by resident as additional monthly rent)</div>
                                </div>
                                <div class="waiver-calc__rl-value" id="calcMonthlyCost">$3,200.00</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="small-12 medium-6 medium-offset-3 cell">

                <?php if ( have_rows('cta') ) : ?>
                    <div class="calculator__cta reveal-up load-hidden">
                        <?php while( have_rows('cta') ) : the_row(); ?>
                            <?php if ( get_sub_field('title') ) : ?>
                                <div class="calculator__cta-title">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="calculator__cta-actions">
                                <?php $button = get_sub_field('button'); ?>
                                <?php if( $button ): ?>
                                    <a class="calculator__cta-btn" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ? $button['target'] : '_self'); ?>"><?php echo esc_html($button['title']); ?></a>
                                <?php endif; ?>

                                <?php if ( get_sub_field('phone') ) : ?>
                                    <div class="calculator__cta-phone">
                                        <span class="calculator__cta-phone-label">Or give us a call</span>
                                        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_sub_field('phone')); ?>"><?php echo get_sub_field('phone'); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<script>
(function($) {
  'use strict';

  if (!document.getElementById('calcTotalUnits')) return;

  // ── DOM refs ──
  var $totalUnits       = document.getElementById('calcTotalUnits');
  var $participationPct = document.getElementById('calcParticipationPct');
  var $partDisplay      = document.getElementById('calcParticipationDisplay');
  var $waiverCost       = document.getElementById('calcWaiverCost');
  var $preferredMarkup  = document.getElementById('calcPreferredMarkup');
  var $capRate          = document.getElementById('calcCapRate');
  var $capDisplay       = document.getElementById('calcCapRateDisplay');
  var $claimsPaid       = document.getElementById('calcClaimsPaid');

  var $rentPerUnit      = document.getElementById('calcRentPerUnit');
  var $claimsPaidDisp   = document.getElementById('calcClaimsPaidDisplay');
  var $assetValue       = document.getElementById('calcAssetValue');
  var $annualRent       = document.getElementById('calcAnnualRent');
  var $netRentClaims    = document.getElementById('calcNetRentClaims');
  var $annualCost       = document.getElementById('calcAnnualCost');
  var $monthlyCost      = document.getElementById('calcMonthlyCost');

  // Billboard SVG text
  var $billboardAmount  = document.querySelector('#calcBillboardAmount tspan');
  var $billboard        = document.querySelector('.waiver-calc__billboard');

  var $partFill = document.getElementById('calcPartFill');
  var $capFill  = document.getElementById('calcCapFill');

  // ── Formatters ──
  function fmt(n) {
    return n.toLocaleString('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    });
  }

  // ── Slider fill ──
  function updateSliderFill(slider, fillEl) {
    var pct = ((slider.value - slider.min) / (slider.max - slider.min)) * 100;
    fillEl.style.width = pct + '%';
  }

  // ── CORE CALCULATION ──
  function calculate() {
    var totalUnits = parseFloat($totalUnits.value) || 0;
    var partPct    = parseFloat($participationPct.value) / 100;
    var waiverCost = parseFloat($waiverCost.value) || 0;
    var markup     = parseFloat($preferredMarkup.value) || 0;
    var capRateVal = parseFloat($capRate.value) / 100;
    var claimsPaid = parseFloat($claimsPaid.value) || 0;

    var participationUnits      = Math.round(totalUnits * partPct);
    var additionalRentPerUnit   = waiverCost + markup;
    var annualAdditionalRent    = participationUnits * additionalRentPerUnit * 12;
    var annualWaiverPremiumCost = participationUnits * waiverCost * 12;
    var yearlyAncillaryRevenue  = annualAdditionalRent - annualWaiverPremiumCost;
    var increaseAssetValue      = capRateVal > 0 ? yearlyAncillaryRevenue / capRateVal : 0;
    var netAdditionalRentClaims = annualAdditionalRent + claimsPaid;
    var avgMonthlyCost          = annualWaiverPremiumCost / 12;

    // ── Update DOM ──
    $partDisplay.textContent = Math.round(partPct * 100) + '%';
    $capDisplay.textContent  = (capRateVal * 100).toFixed(1) + '%';

    $rentPerUnit.textContent    = fmt(additionalRentPerUnit);
    $claimsPaidDisp.textContent = parseFloat($claimsPaid.value).toLocaleString('en-US');

    // Billboard SVG amount
    if ($billboardAmount) {
      $billboardAmount.textContent = fmt(yearlyAncillaryRevenue);
    }

    // Bump animation on billboard
    if ($billboard) {
      $billboard.classList.remove('bump');
      void $billboard.offsetWidth;
      $billboard.classList.add('bump');
    }

    $assetValue.textContent    = fmt(increaseAssetValue);
    $annualRent.textContent    = fmt(annualAdditionalRent);
    $netRentClaims.textContent = fmt(netAdditionalRentClaims);
    $annualCost.textContent    = fmt(annualWaiverPremiumCost);
    $monthlyCost.textContent   = fmt(avgMonthlyCost);

    // Slider fills
    updateSliderFill($participationPct, $partFill);
    updateSliderFill($capRate, $capFill);
  }

  // ── Bind events ──
  [$totalUnits, $participationPct, $waiverCost, $preferredMarkup, $capRate, $claimsPaid]
    .forEach(function(el) {
      el.addEventListener('input', calculate);
      el.addEventListener('change', calculate);
    });

  // Init
  calculate();

})(jQuery);
</script>

<?php get_footer();