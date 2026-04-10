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

                <div class="calculator__input">

                    <!-- Calculator Inputs -->
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
                        <label>Cap Rate <span class="waiver-calc__tip" data-tip="Ancillary revenue ÷ cap rate = increase in asset value.">?</span></label>
                        <span class="waiver-calc__slider-value" id="calcCapRateDisplay">35%</span>
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
                    <div class="waiver-calc__field">
                        <label for="calcClaimsPaid">Claims Paid (Annual) <span class="waiver-calc__tip" data-tip="Annual claims paid out.">?</span></label>
                        <input type="number" id="calcClaimsPaid" value="10000" min="0" step="100">
                    </div>
                    </div>


                </div>
            </div>
            <div class='small-12 large-6 cell'>
                <div class="calculator__results">


                    <!-- Calculator Results -->
                    <div class="waiver-calc__results">
                        <div class="waiver-calc__results-inner">
                            <div class="waiver-calc__revenue-label">Your Additional Yearly Revenue</div>
                            <div class="waiver-calc__revenue" id="calcYearlyRevenue">$21,600.00</div>

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
            <div class="small-12 large-8 large-offset-2 cell">
                
                <?php if ( have_rows('cta') ) : ?>
                    <div class="calculator__cta">
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
    // ==========================================================================
// Waiver Calculator
// ==========================================================================
// Enqueue this separately or add to app.js entry point

(function($) {
  'use strict';

  // Only run on pages with the calculator
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
  var $yearlyRevenue    = document.getElementById('calcYearlyRevenue');
  var $assetValue       = document.getElementById('calcAssetValue');
  var $annualRent       = document.getElementById('calcAnnualRent');
  var $netRentClaims    = document.getElementById('calcNetRentClaims');
  var $annualCost       = document.getElementById('calcAnnualCost');
  var $monthlyCost      = document.getElementById('calcMonthlyCost');

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

  // ── CORE CALCULATION (mirrors spreadsheet formulas) ──
  function calculate() {
    var totalUnits = parseFloat($totalUnits.value) || 0;
    var partPct    = parseFloat($participationPct.value) / 100;
    var waiverCost = parseFloat($waiverCost.value) || 0;
    var markup     = parseFloat($preferredMarkup.value) || 0;
    var capRateVal = parseFloat($capRate.value) / 100;
    var claimsPaid = parseFloat($claimsPaid.value) || 0;

    // Participation units
    var participationUnits = Math.round(totalUnits * partPct);

    // Additional Rent Per Unit (Monthly) = cost + markup
    var additionalRentPerUnit = waiverCost + markup;

    // Annual Additional Rent = units * monthly rent * 12
    var annualAdditionalRent = participationUnits * additionalRentPerUnit * 12;

    // Annual Waiver Premium Cost = units * cost * 12
    var annualWaiverPremiumCost = participationUnits * waiverCost * 12;

    // Yearly Ancillary Revenue = annual rent - annual cost
    var yearlyAncillaryRevenue = annualAdditionalRent - annualWaiverPremiumCost;

    // Increase in Asset Value = revenue / cap rate
    var increaseAssetValue = capRateVal > 0 ? yearlyAncillaryRevenue / capRateVal : 0;

    // Net Additional Rent & Claims = annual rent + claims
    var netAdditionalRentClaims = annualAdditionalRent + claimsPaid;

    // Average Monthly Cost = annual premium cost / 12
    var avgMonthlyCost = annualWaiverPremiumCost / 12;

    // ── Update DOM ──
    $partDisplay.textContent = Math.round(partPct * 100) + '%';
    $capDisplay.textContent  = (capRateVal * 100).toFixed(1) + '%';

    $rentPerUnit.textContent    = fmt(additionalRentPerUnit);
    $claimsPaidDisp.textContent = parseFloat($claimsPaid.value).toLocaleString('en-US');

    // Animate the big number
    $yearlyRevenue.classList.remove('bump');
    void $yearlyRevenue.offsetWidth; // reflow trigger
    $yearlyRevenue.textContent = fmt(yearlyAncillaryRevenue);
    $yearlyRevenue.classList.add('bump');

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
      // Also catch 'change' for select elements
      el.addEventListener('change', calculate);
    });

  // Init
  calculate();

})(jQuery);
</script>

<?php get_footer();
